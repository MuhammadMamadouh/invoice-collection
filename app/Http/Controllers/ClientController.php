<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
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
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {

            Client::create($request->all());
            return to_route('clients.index')->with(['message' => 'success']);

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
            $client->update($request->all());
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
