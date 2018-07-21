<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use App\Category;
use App\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.items.index',[
            'items' => Item::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::pluck('title', 'id')->all();
        $categories = Category::pluck('title', 'id');
        $status = DB::table('status_item')->get();

        return view('admin.Items.create', [
            'brands' => $brands,
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
            'description' => 'required|max:1000',
            'image' => 'nullable|image',
            'price' => 'required|integer',
            'category_id' => 'required',
        ]);

        $item = Item::add($request->all());
        $item->uploadImage($request->file('image'));
        $item->setBrand($request->get('brand_id'));
        $item->setCategory($request->get('category_id'));

        return redirect()->route('admin.item.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        return view('admin.items.edit', [
            'item' => Item::find($id),
            'brands' => Brand::pluck('title', 'id')->all(),
            'categories' => Category::pluck('title', 'id')->all(),
            'status' => DB::table('status_item')->get(),
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
            'title' => 'required',
            'description' => 'required|max:1000',
            'image' =>  'nullable|image',
            'price' => 'required|integer',
        ]);

        $item = Item::find($id);
        $item->edit($request->all());
        $item->uploadImage($request->file('image'));
        $item->setBrand($request->get('brand_id'));
        $item->setCategory($request->get('category_id'));

        return redirect()->route('admin.item.index');
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
        return redirect()->route('admin.item.index');
    }
}
