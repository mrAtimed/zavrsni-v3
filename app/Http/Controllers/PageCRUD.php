<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;
use Illuminate\Support\Facades\Storage;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class PageCRUD extends Controller
{
    public function index()
    {
        return view('pages.post.index', ['data' => Page::all()]);
    }

    public function create()
    {
        return view('pages.post.create');
    }

    public function store(Request $request)
    {
        $q = $request->request;
        $data = new Page;
        $data->id = $q->get("id");
        $data->name = $q->get("name");
        $data->slug = $q->get("slug");
        $data->img = $q->get("img");
        $data->text = $q->get("text");
        // $data->save();

        return dd($q->all());
    }

    public function show(string $id)
    {
        return abort(403, 'lakse buraz?');
    }

    public function edit(string $id)
    {
        $q = Page::find($id);
        return view('pages.post.edit', ['data' => $q->getOriginal()]);
    }

    public function update(Request $request, string $id)
    {
        $Myroutes = Page::find($id);
        $Myroutes->start = $request->input('start');
        $Myroutes->end = $request->input('end');
        $Myroutes->waypoints = $request->input('waypoints');

        $Myroutes->save();

        return redirect('/p/{{$id}}/edit/');
    }

    public function destroy(string $id)
    {
        //
    }
}
