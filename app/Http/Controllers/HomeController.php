<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function itemsShow($slug)
    {
        $item = Item::where('slug', $slug)->firstOrFail();

        if (NULL == $item->image)
        {
            $item->image = '/img/no-image.png';
        }

        $category = Category::find($item->category_id);
        $simularItems = DB::table('items')
                        ->where([
                            ['category_id', '=', $item->category_id],
                            ['id', '!=', $item->id]
                        ])
                        ->get();
        return view('pages.item-show', [
            'item' => $item,
            'simularItems' => $simularItems,
            'category' => $category,
        ]);
    }

    public function wishList()
    {
        return view('pages.wishlist');
    }
}
