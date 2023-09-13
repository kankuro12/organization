<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front.pages.home');
    }

    public function gallery(){
        return view('front.pages.galleries');
    }

    public function news(){
        $news=newsMini();
        return view('front.pages.news',compact('news'));
    }
}
