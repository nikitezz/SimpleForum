<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function index(){
        $reviews = new Reviews();
        $review = Reviews::orderBy('id','desc')->get();
        return view('Reviews.index', compact([
            'review',
        ]));
    }
}
