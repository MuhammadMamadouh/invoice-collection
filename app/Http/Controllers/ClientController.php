<?php

namespace App\Http\Controllers;

use App\Enum\Role;
use App\Enum\RoleEnum;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\CollectionScenario;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::with('collectionScenarios')->paginate(30);
        $collectionsScenario = CollectionScenario::all();
        $collectors = User::where('role_id', RoleEnum::COLLECTOR)->get();
        return view('clients.index', compact('clients', 'collectionsScenario', 'collectors'));
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
        try{
            Client::create($request->validated());
            return to_route('clients.index')->with(['message' => 'success']);
        }catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('clients.index')->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
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
        $client = Client::findOrFail($id);
        try {
            $client->update($request->validated());
            return to_route('clients.index')->with(['message' => 'success']);
        }catch (Exception $e) {
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
            return to_route('clients.index')->with(['message' => 'success']);
        }catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('clients.index')->with(['message' => $e->getMessage()]);
        }
    }
}
