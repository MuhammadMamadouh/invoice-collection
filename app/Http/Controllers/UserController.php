<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.settings-manage-users-account', compact('users'));
    }
    public function store(StoreUserRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('picture')) {
            $data['picture'] = $request->file('picture')->store('users', 'public');
        }

        User::create($data);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // public function edit($id)
    // {
    //     $user = User::findOrFail($id);
    //     return response()->json($user);
    // }

    // public function update(UpdateUserRequest $request, User $user)
    // {
    //     if ($request->password) {
    //         $data = $request->all();
    //     }else{
    //            $data = $request->except('password');
    //        }
    //     // Handling photo upload
    //     if ($request->hasFile('photo')) {
    //         if(isset($user->photo)){
    //          Storage::disk('public')->delete($user->photo);
    //         }
    //         // Store new photo
    //         $data['photo'] = $request->file('photo')->store('users', 'public');
    //     }
    //     $user->update($data);
    //     return redirect()->route('users.index')->with('success', 'Data saved successfully.');
    // }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }


}
