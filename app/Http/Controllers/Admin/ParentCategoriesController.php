<?php

namespace App\Http\Controllers\Admin;

use App\ParentCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParentCategoriesController extends Controller
{
    public function index()
    {
        $categories = ParentCategory::all();

        return view('admin.parcat.index', [
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.parcat.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        ParentCategory::create($request->all());

        return redirect()->route('parcat.index');
    }

    public function edit(int $id)
    {
        $category = ParentCategory::find($id);

        return view('admin.parcat.edit',[
            'category' => $category,
        ]);
    }

    public function update(Request $request, int $id)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        $category = ParentCategory::find($id);

        $category->update($request->all());

        return redirect()->route('parcat.index');
    }

    public function destroy(int $id)
    {
        ParentCategory::find($id)->delete();

        return redirect()->route('parcat.index');
    }
}
