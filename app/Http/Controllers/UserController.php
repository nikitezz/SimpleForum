<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
        return view('Users.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8|max:15',
        ]);
        $users = User::create([
            'name'=>$request->input('name'),
            'surname'=>$request->input('surname'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
        ]);
        Auth::login($users);
        return redirect('home');
    }
    public function loginForm(){
        return view('Users.login');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:15',
        ]);
        if (Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ])){
            return redirect('home');
        }
        return request()->back();
    }
    public function logout(){
        Auth::logout();
        return redirect('home');
    }
}
