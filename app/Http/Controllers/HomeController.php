<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = new Posts();
        $post = Posts::all();
        return view('home',compact([
            'post',
        ]));
    }
}
