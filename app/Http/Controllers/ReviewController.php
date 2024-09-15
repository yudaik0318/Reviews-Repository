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
}
