<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function coucou(){
        return view('Front.coucous');
    }

    public function clickmoi(){
        return view('Front.clickmoi');
    }
}

