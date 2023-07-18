<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
class RoleCRUD extends Controller
{
    public function index()
    {
        return view('pages.roles.index', ['data' => Role::all()]);
        
    }

    public function create()
    {
        $roles = Role::all();
        return view('pages.roles.create');
    }

    public function store(Request $request)
    {
        $q = $request->request;
        $data = new Role;
        $data->name = $q->get("name");
        $data->save();
        return redirect('/r');
    }

    public function show(string $id)
    {
        return Abort(403);
    }

    public function edit(string $id)
    {
        $q = Role::find($id);
        return view('pages.roles.edit', ['data' => $q->getOriginal()]);
        
    }

    public function update(Request $request, string $id)
    {
        Role::where("id", $id)->update([
            "name" => $request->name,
        ]);

        return redirect('/r');
    }

    public function destroy(string $id)
    {
        Role::where("id", $id)->delete();
        return redirect('/r');

    }
}
