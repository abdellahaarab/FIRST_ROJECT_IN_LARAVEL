<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeController extends Controller
{
    public function profile(){
        return view('me.profile');
    }
    public function login(){
        return view('me.login');
    }
}
