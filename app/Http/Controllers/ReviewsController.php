<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function list(Request $request)
    {
        return response()->json(Review::where('product_id', $request->input('product_id'))->get());
    }

    public function store(Request $request)
    {
        Review::create([
            'product_id' => $request->input('product_id'),
            'cart_id' => $request->input('cart_id'),
            'user_id' => auth()->user()->id,
            'stars' => $request->input('stars'),
            'message' => $request->input('comment')
        ]);
    }

    public function checkHasReview(Request $request)
    {
        $review = Review::where('product_id', $request->input('product_id'))->where('cart_id', $request->input('cart_id'))->get();

        return response()->json(count($review) == 0);
    }
}
