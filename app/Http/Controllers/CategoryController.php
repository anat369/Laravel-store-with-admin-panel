<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        $items = $category->items()->paginate(12);
        return view('pages.category', [
            'items' => $items,
            'category' => $category,
        ]);
    }
}
