<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('Posts.create');
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required|max:25',
            'content'=>'required|max:250',
            'avtor'=>'required',
        ]);
        Posts::create([
            'title'=>$request->input('title'),
            'content'=>$request->input('content'),
            'avtor'=>$request->input('avtor'),
        ]);
        return redirect('home');
    }
}
