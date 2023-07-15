<?php

namespace App\Http\Controllers;

use App\Models\Page;
// use Illuminate\Http\Request;

class PageController extends Controller
    {


        public function __invoke($slug)
        {
            $param = Page::where('slug', "=", $slug)->first();
            return view('pages.post', ['data' => $param->getOriginal()]);
        }
    }
