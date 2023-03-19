<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index(){
        return view('Mail.index');
    }
    public function store(Request $request){
        $request->validate([
            'email'=>'required|email',
            'name'=>'required',
            'reviews'=>'required|min:5|max:200'
        ]);
        Reviews::create([
            'email'=>$request->input('email'),
            'name'=>$request->input('name'),
            'reviews'=>$request->input('reviews'),
        ]);
        return redirect('home');
    }
}
