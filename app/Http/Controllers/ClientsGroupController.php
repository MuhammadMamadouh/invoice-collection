<?php

namespace App\Http\Controllers;

use App\Models\ClientsGroup;
use Illuminate\Http\Request;


class ClientsGroupController extends Controller
{
   
    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 25); 
        $clientsGroups = ClientsGroup::paginate($perPage);

        return view('settings-manage-clients-group', compact('clientsGroups'));
    }


    public function store(Request $request)
    {
        $messages = $this->messages();
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ], $messages);

        ClientsGroup::create($data);

        return redirect()->route('clients-group')->with('success', 'Client group created successfully.');
    }

    public function getGroup($id)
{
    $clientsGroup = ClientsGroup::findOrFail($id);
    return response()->json($clientsGroup);
}
  

public function update(Request $request, $id)
{
    $group = ClientsGroup::findOrFail($id);
    $group->name = $request->input('name');
    // $group->clients = $request->input('clients');
    // $group->associated = $request->input('associated');
    $group->save();

    return response()->json(['message' => 'Client group updated successfully']);
}

       

    public function destroy($id)
    {
        try {
            ClientsGroup::findOrFail($id)->delete();
            return to_route('clients-group')->with(['message' => 'success']);
        }catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('clients-group')->with(['message' => $e->getMessage()]);
        }
    }

    public function deleteAll(Request $request)
    {
        try {
            ClientsGroup::truncate();
            return to_route('clients-group')->with(['message' => 'success', 'All client groups deleted successfully.']);
        }catch (Exception $e) {
            Log::info($e->getMessage());
            return to_route('clients-group')->with(['message' => $e->getMessage()]);
        }

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
