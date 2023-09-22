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

    public function faq() {
        $faqs=getFAQ();
        return view('front.pages.faq',compact('faqs'));
    }

    public function committees(){
        $committees=getComities();
        return view('front.pages.comities',compact('committees'));


    }

    public function committeeSingle($slug){
        $committee=DB::table('notices')->where('slug',$slug)->first();
        $members=getMember($committee->id);
        return view('front.pages.comitiesingle',compact('committee','members'));

    }

    public function issues(){
        return view('front.pages.issues');
    }

    public function issueSIngle($slug){
        $currentIssue=DB::table('notices')->where('slug',$slug)->first(['title','desc']);
        $issues= DB::table('notices')->where('type',7)->get(['slug','title','short_desc']);
        return view('front.pages.issuesingle',compact('issues','currentIssue'));
    }

    public function about(){
        return view('front.pages.about');
    }

    public function aboutSIngle($slug){
        $about=DB::table('notices')->where('slug',$slug)->first(['title','file','short_desc','desc']);
        return view('front.pages.aboutsingle',compact('about'));

    }
}
