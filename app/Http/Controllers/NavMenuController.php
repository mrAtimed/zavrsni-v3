<?php

namespace App\Http\Controllers;

use App\Models\NavMenu;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(NavMenu $navMenu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NavMenu $navMenu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NavMenu $navMenu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NavMenu $navMenu)
    {
        NavMenu::destroy($navMenu);
        return redirect('/u/');
    }
}
