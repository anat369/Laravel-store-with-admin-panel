<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $items = DB::table('items')->where('category_id', '=', $category->id)->get();

        return view('pages.category', ['items'  =>  $items]);
    }
}
