<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user = new User();
        $users = User::all();
        return view('Users.index', compact([
            'user',
        ]));
    }
}
