<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ClientsGroup;
use Exception;
use Illuminate\Http\Request;


class ClientsGroupController extends Controller
{

    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 25);
        $clientsGroups = ClientsGroup::with(['clients'])->withCount('clients')->paginate($perPage);
        $clients = Client::all();
        return view('clients-group.index', compact('clientsGroups', 'clients'));
    }


    public function store(Request $request)
    {
        $messages = $this->messages();
        $data = $request->validate([
            'en_name' => 'required|string|max:255',
        ], $messages);
        $groupClient = ClientsGroup::create($data);
        $groupClient->clients()->sync($request->group_clients);

        return redirect()->route('clients-group.index')->with('success', __('created successfully'));
    }

    public function show($id)
{
    $clientsGroup = ClientsGroup::with(['clients:id,company_code,company_name'])->findOrFail($id);
    return response()->json($clientsGroup);
}


public function update(Request $request, $id)
{
    $group = ClientsGroup::findOrFail($id);
    $group->en_name = $request->input('en_name');
    $group->save();
    $group->clients()->sync($request->group_clients);
    return response()->json(['message' => 'updated successfully']);
}



    public function destroy($id)
    {
        ClientsGroup::findOrFail($id)->delete();
        return to_route('clients-group')->with(['message' => 'success']);

    }

    public function deleteAll(Request $request)
    {
        ClientsGroup::truncate();
        return to_route('clients-group')->with(['message' => 'success', 'All client groups deleted successfully.']);
    }



    public function messages()
    {
        return [
            'name.required' => 'The group name is required.',
            'name.string' => 'The group name must be a string.',
            'name.max' => 'The group name may not be greater than 255 characters.',
        ];
    }
}
