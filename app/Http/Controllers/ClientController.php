<?php

namespace App\Http\Controllers;

use App\Enum\Role;
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
use App\Models\Item;
use App\Models\ItemType;
use App\Models\User;
use Carbon\Carbon;
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
        ])->filter(new ClientFilter(request()))->paginate(30);

        dd($clients);
        $clientResource = ClientResource::collection($clients)->response()->getData();
        $clientResource = $clientResource->data;
        $collectionsScenario = CollectionScenario::all();
        $itemTypes = ItemType::all();
        $currencies = Currency::all();
        $clientGroups = ClientsGroup::all();
        $collectors = User::collectors()->get();
        $clientRoles = ClientRole::all();
        return view('clients.index', compact('clientResource', 'collectionsScenario',
        'collectors', 'itemTypes', 'clients', 'currencies', 'clientGroups', 'clientRoles'));

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
    public function showClientData($id)
    {
        $client = Client::findOrFail($id);
        $clientResource = new ClientResource($client);
        $clients = Client::all();
        $collectors = User::collectors()->get();
        ;
        $collectionsScenario = CollectionScenario::all();
        $currencies = Currency::all();
        $itemTypes = ItemType::all();
        return view('clients.client_data_model', compact('clientResource', 'collectors', 'client', 'clients', 'itemTypes', 'currencies', 'collectionsScenario'));
    }
    public function show($id)
    {
        $client = Client::findOrFail($id);
        $client = new ClientResource($client);
        $client = $client->response()->getData()->data;
        $clients = Client::all();
        $collectors = User::collectors()->get();
        $collectionsScenario = CollectionScenario::all();
        $currencies = Currency::all();
        $itemTypes = ItemType::all();
        return view('clients.show', compact('collectors', 'client', 'clients', 'itemTypes', 'currencies', 'collectionsScenario'));
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

                if($request->has('role_id')){
                    Contact::updateOrCreate(['role_id' => $request->role_id], $request->all());
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
