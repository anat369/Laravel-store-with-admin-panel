<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{


    public function addReview(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:500',
            'message'	=>	'required|max:2000',
        ]);

        $review = new Review([
            'title' =>$request->get('title'),
            'message' => $request->get('message'),
            'user_id' => Auth::user()->id,
        ]);

        $review->item_id = $request->get('item_id');

        $review->save();

        return redirect()->back()->with('status', 'Спасибо за отзыв! После проверки он будет добавлен!');
    }
}
