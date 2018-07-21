<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('pages.profile', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore(Auth::user()->id),
            ],
            'avatar'	=>	'nullable|image'
        ]);

        $user = Auth::user();
        $user->edit($request->all());
        $user->generatePassword($request->get('password'));
        $user->uploadAvatar($request->file('avatar'));

        return redirect()->back()->with('status', 'Ваш профиль был успешно обновлен');
    }

    /**
     *  Добавляем товар в избранное
     *
     * @param Item $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function favoriteItem(Item $item)
    {
        Auth::user()->favorites()->attach($item->id);

        return back();
    }

    /**
     * Удаляем товар из избранного
     *
     * @param Item $item
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unFavoriteItem(Item $item)
    {
        Auth::user()->favorites()->detach($item->id);

        return back();
    }

    /**
     * Получаем все избранные товары пользователя
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function myFavorites()
    {

        $favoriteItems = Auth::user()->favorites();
//        dd($favoriteItems);
        return view('pages.favorites', [
            'favoriteItems' => Auth::user()->favorites(),
        ]);
    }
}
