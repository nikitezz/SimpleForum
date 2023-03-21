<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $users = new User();
        $user = User::all();

        $posts = new Posts();
        $post = Posts::all();

        $reviews = new Reviews();
        $review = Reviews::all();

       return view('Admin.index',compact([
           'user',
           'post',
           'review',
       ]));
    }
}
