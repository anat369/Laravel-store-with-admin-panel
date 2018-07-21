<?php

namespace App\Http\Controllers\Admin;

use App\Item;
use App\Order;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.orders.index', [
            'orders' => $orders,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $order = Order::find($id);
        $user = User::find($order->user_id);
        $item = Item::find($order->item_id);
        return view('admin.orders.edit', [
            'order' => $order,
            'user' => $user,
            'item' => $item,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $order = Order::find($id);
        $order->edit($request->all());

        return redirect()->route('admin.order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( int $id)
    {
        Order::find($id)->remove();
        return redirect()->route('admin.order.index');
    }

}
