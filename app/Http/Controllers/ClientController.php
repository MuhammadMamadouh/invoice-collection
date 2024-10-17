<?php

namespace App\Http\Controllers;

use App\Enum\RoleEnum;
use App\Filters\Client\ClientFilter;
use App\Http\Requests\ClientRequest;
use App\Http\Resources\ClientResource;
use App\Models\Client;
use App\Models\ClientRole;
use App\Models\ClientsGroup;
use App\Models\CollectionScenario;
use App\Models\Contact;
use App\Models\Currency;
use App\Models\ItemType;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $clients = Client::with([
            'collector',
            'items',
            'items.itemType',
            'items.itemStatus',
            'items.currency',
            'collectionScenario',
            'firstDueItem',
            'contacts',
            'items.itemChangeStatus',
            //'items.itemActions'
        ])->filter(new ClientFilter(request()))->paginate(30);
        $clientResource = ClientResource::collection($clients)->response()->getData()->data;
        $client_count = Client::count();
        $collectionsScenario = CollectionScenario::all();
        $itemTypes = ItemType::all();
        $currencies = Currency::all();
        $clientGroups = ClientsGroup::all();
        $collectors = User::collectors()->get();
        $clientRoles = ClientRole::all();
        $users = User::all(['id', 'first_name', 'last_name', 'role_id']);
        return view('clients.index', compact(
'collectionsScenario',
'clientResource',
            'client_count',
            'clientGroups',
            'clientRoles',
            'currencies',
            'collectors',
            'itemTypes',
            'clients',
            'users'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $collections = CollectionScenario::all();
        $collectors = User::where('role_id', RoleEnum::COLLECTOR)->get();
        return view('clients.create', compact('collections', 'collectors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        try {
            Client::create($request->validated());
            return to_route('clients.index')->with(['message' => __('created successfully')]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('clients.index')->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    // public function showClientData($id)
    // {
    //     $client = Client::with([
    //         'collector',
    //         'items',
    //         'items.itemType',
    //         'items.itemStatus',
    //         'items.currency',
    //         'collectionScenario',
    //         'firstDueItem',
    //         'contacts',
    //         'items.itemChangeStatus',
    //         //'items.itemActions'
    //     ])->findOrFail($id);
    //     $clientResource = new ClientResource($client);
    //     //dd($clientResource);
    //     $clients = Client::all();
    //     $collectors = User::collectors()->get();
    //     $clientRoles = ClientRole::all();
    //     $collectionsScenario = CollectionScenario::all();
    //     $currencies = Currency::all();
    //     $itemTypes = ItemType::all();
    //     return view('clients.client_data_model',
    //     [
    //             'clientResource' => $clientResource,
    //             'clientRoles' => $clientRoles,
    //             'collectors' => $collectors,
    //             'client' => $client,
    //             'clients' => $clients,
    //             'itemTypes' => $itemTypes,
    //             'currencies' => $currencies,
    //             'collectionsScenario' => $collectionsScenario,
    //         ]
    //     );
    // }
    public function show($id)
    {
        $client = Client::findOrFail($id);
        // dd();
        $client = new ClientResource($client);
        $client = $client->response()->getData()->data;
        // dd($client);
        $clients = Client::where('id', '>', $id)->get();
        // dd($client->firstDueItem);
        $collectors = User::collectors()->get();
        $collectionsScenario = CollectionScenario::all();
        $currencies = Currency::all();
        $itemTypes = ItemType::all();
        $clientRoles = ClientRole::all();
        $users = User::all(['id', 'first_name', 'last_name', 'role_id']);
        return view('clients.show',
            [
                'clientResource' => $client,
                'collectors' => $collectors,
                'client' => $client,
                'clients' => $clients,
                'itemTypes' => $itemTypes,
                'currencies' => $currencies,
                'collectionsScenario' => $collectionsScenario,
                'clientRoles' => $clientRoles,
                'users' => $users,
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, $id)
    {
        try {
            DB::transaction(function () use ($request, $id) {
                $client = Client::findOrFail($id);
                $client->update($request->validated());
                if ($request->has('role_id')) {
                    $existingContact = Contact::where('client_id', $client->id)->first();
                    if ($existingContact && $existingContact->role_id != $request->role_id) {
                        Contact::create($request->all());
                    } else {
                        Contact::updateOrCreate(
                            ['client_id' => $client->id],
                            $request->all()
                        );
                    }
                }
            });
            return to_route('clients.index')->with(['message' => __('edited successfully')]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('clients.index')->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            Client::findOrFail($id)->delete();
            return to_route('clients.index')->with(['message' => __('deleted successfully')]);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('clients.index')->with(['message' => $e->getMessage()]);
        }
    }
}
