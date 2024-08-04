<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users  = User::with('role')->get();
        $roles  = Role::all();
        return view('users.index', compact('users', 'roles'));
    }
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();
        if (isset($data['password'])) {
            $data['password'] =  Hash::make($data['password']);
        }
        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('users', 'public');
        }

        User::create($data);

        return redirect()->route('users.index')->with('success', __('created successfully.'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }

    public function update(UpdateUserRequest $request, $id)
    {
            $data = $request->all();
            $user=User::find($request->id);
        // Handling picture upload
        if ($request->hasFile('picture')) {
            if(isset($user->picture)){
                Storage::disk('public')->delete($user->picture);
            }
            // Store new picture
            $data['picture'] = $request->file('picture')->store('users', 'public');
        }
        $user->update($data);
        return redirect()->route('users.index')->with('success', __('edited successfully'));
    }
    public function destroy($id)
    {
        DB::transaction(function () use ($id) {
            $user = User::findOrFail($id);

            if ($user->picture) {
                Storage::disk('public')->delete($user->picture);
            }

            $user->delete();
        });

        return redirect()->route('users.index')->with('success', __('deleted successfully'));
    }


    public function regeneratePassword(Request $request, User $user)
{
    $request->validate([
        'password' => 'required|confirmed|min:8',
    ]);

    $user->password = Hash::make($request->password);
    $user->save();

    return redirect()->route('users.index')->with('success', __('Password regenerated successfully.'));
}


}