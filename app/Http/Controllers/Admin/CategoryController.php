<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::all(),
        ]);
    }


    public function create()
    {
        return view('admin.categories.create',[
            'category'   => [],
            'categories' => Category::with('children')->where('parent_id', '0')->get(),
            ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'parent_id' => 'required',
            ]);

        Category::create($request->all());

        return redirect()->route('admin.category.index');
    }

    public function edit(int $id)
    {
        return view('admin.categories.edit',[
            'category' => Category::find($id),
            'categories' => Category::with('children')->where('parent_id', '0')->where('id', '!=', $id)->get(),
        ]);
    }

    public function update(Request $request, int $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'parent_id' => 'required',
        ]);

        $category = Category::find($id);

        $category->update($request->all());

        return redirect()->route('admin.category.index');
    }

    public function destroy(int $id)
    {
        Category::find($id)->delete();

        return redirect()->route('admin.category.index');
    }
}
