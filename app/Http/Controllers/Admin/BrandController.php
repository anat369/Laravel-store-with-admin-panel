<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brands.index', [
            'brands' => Brand::all(),
        ]);
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image',
        ]);

        $brand = Brand::add($request->all());
        $brand->uploadImage($request->file('image'));

        return redirect()->route('admin.brand.index');
    }

    /**
     * Редактируем данные отдельного бренда
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(int $id)
    {
        return view('admin.brands.edit',[
            'brand' => Brand::find($id),
        ]);
    }

    public function update(Request $request, int $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
        ]);

        $brand = Brand::find($id);
        $brand->edit($request->all());
        $brand->uploadImage($request->file('image'));
        $brand->update($request->all());

        return redirect()->route('admin.brand.index');
    }

    /**
     * Удаление бренда
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        Brand::find($id)->delete();
        return redirect()->route('admin.brand.index');
    }
}
