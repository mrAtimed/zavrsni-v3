<?php

namespace App\Http\Controllers;

use App\Models\NavMenu;
use App\Models\Page;
use Illuminate\Http\Request;


class NavMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = NavMenu::with('page')->get();
        return view("pages.nav.index", compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = NavMenu::with('page')->get();
        return view("pages.nav.create", compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new NavMenu();
        $user->name = $request->input('name');
        $user->page_id = $request->input('page_id');
        $user->save();
        return redirect('/n');
    }

    /**
     * Display the specified resource.
     */
    public function show(NavMenu $navMenu)
    {
        return abort(403);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $item = NavMenu::find($id);
        $data = Page::all();
        
        // return dd($); 
        return view('pages.nav.edit', compact('data', 'item'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, NavMenu $navMenu)
    {
        $user = NavMenu::findOrFail($navMenu);
        $user->name = $req->input('name');
        $user->role = $req->input('role_id');
        $user->save();
        return redirect("/n");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NavMenu $navMenu)
    {
        NavMenu::destroy($navMenu);
        return redirect('/n');
    }
}
