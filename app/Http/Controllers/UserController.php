<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // index
    public function index(Request $request) {
        // get all users with pagination
        $users = DB::table('users')
        ->when($request->input('name'), function ($query, $name) {
            return $query->where('name', 'like', '%' . $name . '%');
        })
        ->orderBy('id', 'desc')
        ->paginate(10);
        return view('pages.users.index', compact('users'));
    }
    // create
    // store
    // show
    // edit
    public function edit($id) {
        // get all users with pagination
        $user = \App\Models\User::findOrFail($id);
        return view('pages.users.edit', compact('user'));
    }
    // update
    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('user.index')->with('success', 'User successfully updated');
    }
    // destroy
}
