<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function websites(){
        return view('menu.websites');
    }
    public function app(){
        return view('menu.app');
    }
    public function ecommerce(){
        return view('menu.ecommerce');
    }
    public function marketing(){
        return view('menu.marketing');
    }
    public function sistemas(){
        return view('menu.sistemas');
    }
}
