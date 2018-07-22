<?php

namespace App\Http\Controllers;

use App\Favorite;
use App\Item;
use App\User;
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
     *  Добавляем и удаляем товар из избранного
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function favoriteItem(Request $request)
    {

        $item = Item::find($request->itemId);
        if ($item->favorited())
        {
            Auth::user()->favorites()->detach($request->itemId);

            return response(['added' => true]);
        } else {
            Auth::user()->favorites()->attach($request->itemId);
            return response(['added' => false]);
        }
    }

    /**
     * Получаем все избранные товары пользователя
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function myFavorites()
    {

        $myFavorites = Auth::user()->favorites;
        return view('pages.favorites', [
            'favoriteItems' => $myFavorites,
        ]);
    }
}
