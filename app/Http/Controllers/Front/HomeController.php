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

    public function notices(){
        $notices= DB::table('notices')->where('type',1)
        ->orderBy('id','desc')
        ->select('title','file','created_at')->paginate(10);

        return view('front.pages.notice',compact('notices'));

    }

    public function gallerySingle($slug){
        $gallery=DB::table('notices')->where('slug',$slug)->first(['id','title']);
        $images=getGallery($gallery->id);
        return view('front.pages.gallerysingle',compact('gallery','images'));
        // return view('front.gall')

    }
}
