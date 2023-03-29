<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        return view('Posts.create');
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required|max:50',
            'content'=>'required|max:1000',
            'avtor'=>'required',
        ]);
        Posts::create([
            'title'=>$request->input('title'),
            'content'=>$request->input('content'),
            'avtor'=>$request->input('avtor'),
        ]);
        return redirect('home')->with('success','True!');
    }
    public function destroy($id){
        $post = Posts::findOrFail($id);
        $post->delete();
        return redirect('admin')->with('success','True!');
    }
    public function edit($id){
        $post = Posts::findOrFail($id);
        return view('Posts.edit',compact('post'));
    }
    public function update(Request $request, $id){
        $post = Posts::findOrFail($id);
        $post->update($request->all());
        return redirect('admin',)->with('success','True');
}

