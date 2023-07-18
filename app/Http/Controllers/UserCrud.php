<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserCrud extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::with("role")->get();
        return view("pages.users.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('pages.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->role = $request->input('role');
        $user->password = Hash::make($request->input('password_confirmation'));
        $user->save();
        return redirect('/u');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = User::findOrFail($id);
        $roles = Role::all();
        return view('pages.users.edit', compact('data','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, string $id)
    {
        $user = User::findOrFail($id);
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->role_id = $req->input('role');
        $user->save();
        return redirect("/u");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return redirect('/u');
    }
}
