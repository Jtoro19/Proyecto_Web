<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewsCotroller extends Controller
{

    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', ['reviews' => $reviews]);
    }

    public function create()
    {
        return view('');
    }

    public function store(Request $request)
    {
        $review = new Review();
        $review->userID = $request->userID;
        $review->productID = $request->productID;
        $review->text = $request->text;
        $review->stars = $request->stars;
        $review->save();
        return redirect()->route('reviews.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $review = Review::find($id);
        return view('reviews.edit', ['review' => $review]);
    }

    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        //$review->userID = $request->userID;
        //$review->productID = $request->productID;
        $review->text = $request->text;
        $review->stars = $request->stars;
        $review->save();
        return redirect()->route('reviews.index');
    }

    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();
        return redirect()->route('');
    }
}
