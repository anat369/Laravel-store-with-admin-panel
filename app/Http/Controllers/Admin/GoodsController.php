<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Good;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goods = Good::all();

        return view('admin.goods.index',[
            'goods' => $goods,
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
        return view('admin.goods.create', [
            'categories' => $categories,
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
            'date' => 'required',
            'image' => 'nullable|image',
        ]);

        $good = Good::add($request->all());
        $good->uploadImage($request->file('image'));
        $good->setCategory($request->get('category_id'));
        $good->toggleStatus($request->get('status'));

        return redirect()->route('goods.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $good = Good::find($id);
        $categories = Category::pluck('title', 'id')->all();

        return view('admin.goods.edit', [
            'good' => $good,
            'categories' => $categories,
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
            'date'  =>  'required',
            'image' =>  'nullable|image'
        ]);

        $good = Good::find($id);
        $good->edit($request->all());
        $good->uploadImage($request->file('image'));
        $good->setCategory($request->get('category_id'));
        $good->toggleStatus($request->get('status'));

        return redirect()->route('goods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( int $id)
    {
        Good::find($id)->remove();
        return redirect()->route('goods.index');
    }

    public function setDateAttribute($date)
    {
        $changeDate =Carbon::create('d/m/y', $date)->format('Y-m-d');

        $this->attributes['date'] = $changeDate;
    }
}
