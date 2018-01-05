<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function home(){

    	return view('user.home');
    }
    public function post(){

    	return view('user.post');
    }
}
