<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
    public function category($slug)
    {
//        $category = Category::where('slug', $slug)->firstOrFail();

//        $posts = $category->posts()->paginate(4);
        $posts = $slug;

        return view('pages.category', ['posts'  =>  $posts]);
    }
}
