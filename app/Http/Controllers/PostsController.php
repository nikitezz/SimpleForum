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
            'title'=>'required|max:50',
            'title'=>'required|max:50',
            'content'=>'required|max:1000',
            'avtor'=>'required',
        ]);
        Posts::create([
            'title'=>$request->input('title'),
            'content'=>$request->input('content'),
            'avtor'=>$request->input('avtor'),
        ]);
        return redirect('profile');
    }
}
