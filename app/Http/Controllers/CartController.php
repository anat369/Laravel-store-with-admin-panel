<?php

namespace App\Http\Controllers;

use App\Item;
use App\Order;
use Illuminate\Http\Request;
use App\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $items = [];

        $totalPrice = 0;

        $itemsInCart = Cart::getProducts();

        // Получим идентификаторы и количество товаров в корзине
        if ($itemsInCart) {
            foreach ($itemsInCart as $key => $value) {
                $items[$key] = Item::find($key);
                $items[$key]['count'] = $value;
            }
        }

        $totalPrice = Cart::getTotalPrice($itemsInCart);

        return view('pages.cart', [
            'items' => $items,
            'totalPrice' => $totalPrice,
        ]);
    }

    public function order(Request $request)
    {

        $user_id = Auth::user()->id;
        $items = json_encode($request->session()->get('items'));
        $status = 'Новый';
        Order::create([
            'user_id' => $user_id,
            'items' => $items,
            'status' => $status,
            'price' => $request->price,
        ]);

        Session::forget('items');

        return redirect()->back()->with('status', 'Ваш заказ принят, наш менеджер с вами свяжется!');
    }

    public function orders()
    {
        $orders = Order::all()->where('user_id', '=', Auth::user()->id);

        foreach ($orders as $order) {
            $order->items = json_decode($order->items);
            foreach ($order->items as $item) {
                $items[] = Item::find($item);
            }
        }


        return view('pages.orders',[
            'orders' => $orders,
            'items' => $items,
        ]);
    }

}
