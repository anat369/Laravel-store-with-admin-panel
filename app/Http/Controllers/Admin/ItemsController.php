<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        return view('admin.items.index',[
            'items' => $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        $status = DB::table('status_item')->get();
        return view('admin.Items.create', [
            'categories' => $categories,
            'status' => $status,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
            'price' => 'required|integer',
        ]);

        $item = Item::add($request->all());
        $item->uploadImage($request->file('image'));
        $item->setCategory($request->get('category_id'));

        return redirect()->route('items.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $item = Item::find($id);
        $categories = Category::pluck('title', 'id')->all();
        $status = DB::table('status_item')->get();

        return view('admin.items.edit', [
            'item' => $item,
            'categories' => $categories,
            'status' => $status,
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
        $this->validate($request, [
            'title' =>'required',
            'description'   =>  'required',
            'image' =>  'nullable|image',
            'price' => 'required|integer',
        ]);

        $item = Item::find($id);
        $item->edit($request->all());
        $item->uploadImage($request->file('image'));
        $item->setCategory($request->get('category_id'));

        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( int $id)
    {
        Item::find($id)->remove();
        return redirect()->route('items.index');
    }
}
