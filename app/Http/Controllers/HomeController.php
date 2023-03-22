<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $posts = new Posts();
        $post = Posts::orderBy('id','desc')->simplePaginate(5);;
        return view('home',compact([
            'post',
        ]));
    }
}
