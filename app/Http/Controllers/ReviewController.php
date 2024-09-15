<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index(Review $review)
    {
        return view('reviews.index')->with(['reviews' => $review->getByLimit()]);
    }
    
    public function show(Review $review)
    {
        return view('reviews.show')->with(['review' => $review]);
    }
    
    public function create()
    {
        return view('reviews.create');
    }
    
    public function store(Request $request, Review $review)
    {
        $input = $request['review'];
        $review->fill($input)->save();
        return redirect('/review/' . $review->id);
    }
}
