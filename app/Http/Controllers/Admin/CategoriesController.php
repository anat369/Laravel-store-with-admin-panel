<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::all()->where('pid','>', '0');

        return view('admin.categories.index', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'pid' => 'required',
            ]);

        Category::create($request->all());

//        dd($request);
        return redirect()->route('categories.index');
    }

    public function edit(int $id)
    {
        $category = Category::find($id);

        return view('admin.categories.edit',[
            'category' => $category,
        ]);
    }

    public function update(Request $request, int $id)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $category = Category::find($id);

        $category->update($request->all());

        return redirect()->route('categories.index');
    }

    public function destroy(int $id)
    {
//        dd($id);
        Category::find($id)->delete();

        return redirect()->route('categories.index');
    }
}
