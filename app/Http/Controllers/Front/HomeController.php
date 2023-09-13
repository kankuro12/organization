<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    function newsSingle($slug){
        $newsAll=newsMini();
        $newsSingle=DB::table('notices')->where('slug',$slug)->first(['title','desc','file','created_at']);
        return view('front.pages.newssingle',compact('newsAll','newsSingle'));
    }
}
