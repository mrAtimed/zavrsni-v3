<?php

namespace App\Http\Controllers;

use App\Models\NavMenu;
use App\Models\Page;
use Illuminate\Http\Request;


class NavMenuController extends Controller
{
    public function index()
    {
        $data = NavMenu::with('page')->get();
        return view("pages.nav.index", compact('data'));
    }

    public function create()
    {
        $data = NavMenu::with('page')->get();
        return view("pages.nav.create", compact('data'));
    }

    public function store(Request $request)
    {
        $user = new NavMenu();
        $user->name = $request->input('name');
        $user->page_id = $request->input('page_id');
        $user->save();
        return redirect('/n');
    }

    public function show(NavMenu $navMenu)
    {
        return abort(403);
    }

    public function edit(string $id)
    {   
        $item = NavMenu::find($id);
        $data = Page::all();
        
        return view('pages.nav.edit', compact('data', 'item'));

    }

    public function update(Request $req, string $id)
    {
        $user = NavMenu::findOrFail($id);
        $user->name = $req->input('name');
        $user->role = $req->input('role_id');
        $user->save();
        return redirect("/n");
    }

    public function destroy(string $id)
    {
        NavMenu::where("id", $id)->delete();
        return redirect('/n');
    }
}
