<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.blog-list');
    }

    public function show(string $slug)
    {
        $post = $slug;
        return view('pages.blog-show',[
            'post' => $post,
        ]);
    }
}
