<?php

namespace App\Http\Controllers;

use App\Category;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function showItem($slug)
    {
        $item = Item::where('slug', $slug)->firstOrFail();

        $lastItems = Item::latest()->limit(6)->get()->reverse();

        if (NULL == $item->image)
        {
            $item->image = '/img/no-image.png';
        }

        $category = Category::find($item->category_id);

        $reviews = $item->getReviews();

        $countReviews = HomeController::declension(['отзыв', 'отзыва', 'отзывов'], count($reviews));
        return view('pages.item-show', [
            'item' => $item,
            'lastItems' => $lastItems,
            'category' => $category,
            'reviews' => $reviews,
            'countReviews' => $countReviews,
        ]);
    }

}
