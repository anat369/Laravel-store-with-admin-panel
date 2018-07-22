<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Category;
use App\Item;
use App\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.index',[
            'items' => Item::all(),
            'categories'=> Category::all(),
            'session' => session()->all(),
            'popularItems' => Item::all()->where('is_popular', '=', '1'),
        ]);
    }

    public function addCart(Request $request)
    {
        $count = Cart::addItem($request->itemId);

        return $count;
    }

    public function deleteCart(Request $request)
    {
        Cart::deleteProduct($request->itemId);
        return Cart::countItemsInCart();
    }

    /**
     * Правильное склонение числительных, передаем массив слов и число
     *
     * @param array $titles
     * @param int $number
     * @return string
     */
    public static function declension(array $titles, int $number)
    {
        $cases = [2, 0, 1, 1, 1, 2];
        return $number." ".$titles[ ($number%100 > 4 && $number %100 < 20) ? 2 : $cases[min($number%10, 5)] ];

    }
}
