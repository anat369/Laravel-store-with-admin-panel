<?php

namespace App\Http\Controllers\Admin;

use App\Review;
use App\Http\Controllers\Controller;

class ReviewController extends Controller
{
    public function index()
    {
        return view('admin.reviews.index', [
            'reviews'	=>	Review::all(),
        ]);
    }

    public function toggle($id)
    {
        $comment = Review::find($id);
        $comment->toggleStatus();

        return redirect()->back();
    }

    public function destroy($id)
    {
        Review::find($id)->remove();
        return redirect()->back();
    }

}
