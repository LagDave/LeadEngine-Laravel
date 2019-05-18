<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

//    Homepage of the site
    public function index(){
        return view('pages/home');
    }
}
