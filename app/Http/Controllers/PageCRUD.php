<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;

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
        $data->save();

        return redirect("/p");
    }

    public function show(string $id)
    {
        return Abort(403);
    }

    public function edit(string $id)
    {
        $q = Page::findOrFail($id);
        return view('pages.post.edit', ['data' => $q->getOriginal()]);
    }

    public function update(Request $request, string $id)
    {
        Page::where("id", $id)->update([
            "name" => $request->name,
            "slug" => $request->slug,
            "img" => $request->img,
            "text" => $request->text,
        ]);

        return redirect('/p');

    }

    public function destroy(string $id)
    {
        Page::where("id", $id)->delete();
        return redirect('/p');

    }
}
