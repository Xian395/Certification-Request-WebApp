<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NewUserController extends Controller
{
    public function index()
    {
        $admins = Admin::all()->map(function ($admin) {
            return [
                'id' => $admin->id,
                'name' => $admin->name,
                'email' => $admin->email,
                'type' => 'admin', 
            ];
        });

        $users = User::all()->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'type' => 'user', 
            ];
        });

        $combinedUsers = $admins->concat($users);

        return Inertia::render('Users/Index', [
            'users' => $combinedUsers,
        ]);
    }



    public function create()
    {
        return Inertia::render('Users/Create');
    }



    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        Admin::create($validated);

        return Redirect::route('users.index');

    }

    //USER EDIT
    public function edit(User $users)
    {
        return Inertia::render('Users/Edit', [
            'users' => $users
        ]);

    }


    //ADMIN EDIT
    public function adminedit(Admin $users)
    {
        return Inertia::render('Users/Edit', [
            'users' => $users
        ]);

    }





    //ADMIN UPDATE
    public function adminupdate(Request $request, Admin $users)
    {

        $users->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'password_confirmation' => $request->input('password_confirmation'),
        ]);
        return Redirect::route('users.index');
    }



    //USER UPDATE
    public function update(Request $request, User $users)
    {

        $users->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'password_confirmation' => $request->input('password_confirmation'),
        ]);
        return Redirect::route('users.index');
    }

    public function destroy( User $users){

        $users->delete();
        return redirect()->route('users.index');

    }
}
