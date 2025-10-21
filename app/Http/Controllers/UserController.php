<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::with('profile')-> get();
        return response()->json($users);
    }
    public function post(){
        $users = User::with('posts')-> get();
        return response()->json($users);
    }
}
