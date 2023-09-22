<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NoticeController extends Controller
{
    public function index($type){
        $notices=DB::table('notices')->where('type',$type)->get();
        return view('back.notice.index',compact('notices','type'));
    }

    public function add(Request $request,$type){
        if(isGet()){
            return view('back.notice.add',compact('type'));
        }else{
            $notice=new Notice();
            $notice->title=$request->title;
            if($request->hasFile('file')){

                $notice->file=$request->file->store('uploads/image');
            }else{
                $notice->file="";
            }
            $notice->short_desc=$request->short_desc;
            $notice->desc=$request->desc;
            $notice->type=$type;
            $notice->is_main=$request->filled('is_main');

            $notice->save();
            $this->render($type);
            return redirect()->back()->with('message',noticeType($type).' added successfully');
        }
    }

    public function edit(Request $request,Notice $notice){
        if(isGet()){
            return view('back.notice.edit',compact('notice'));
        }else{
            $notice->title=$request->title;
            if($request->hasFile('file')){
                $notice->file=$request->file->store('uploads/image');
            }

            $notice->short_desc=$request->short_desc;
            $notice->desc=$request->desc;
            $notice->is_main=$request->filled('is_main');
            $notice->save();

            $this->render($notice->type);
            return redirect()->back()->with('message',noticeType($notice->type) .' updated successfully');
        }
    }

    public function del(Request $request,Notice $notice){
        $type=$notice->type;
        $notice->delete();
        $this->render($type);
        return redirect()->back();
    }


    public function render($type){

        if($type==1){
            $notices=DB::table('notices')->where('type',$type)->orderBy('created_at','desc')->take(4)->get();
            file_put_contents(resource_path('views/front/cache/home/notices.blade.php'),view('back.notice.template.notice',compact('notices'))->render());
        }elseif($type==2){
            clearNewMini();
            $allnews=DB::table('notices')->where('type',$type)->orderBy('created_at','desc')->take(3)->get();
            file_put_contents(resource_path('views/front/cache/home/news.blade.php'),view('back.notice.template.news',compact('allnews'))->render());
        }elseif($type==5){
            $galleries=DB::table('notices')->where('type',$type)->orderBy('created_at','desc')->get();
            file_put_contents(resource_path('views/front/cache/home/galleries.blade.php'),view('back.notice.template.homegalleries',compact('galleries'))->render());
            file_put_contents(resource_path('views/front/cache/page/galleries.blade.php'),view('back.notice.template.galleries',compact('galleries'))->render());
        }elseif($type==6){
            delFAQ();
            $faqs=DB::table('notices')->where('type',$type)->orderBy('created_at','desc')->take(4)->get();
            file_put_contents(resource_path('views/front/cache/home/faq.blade.php'),view('back.notice.template.homefaq',compact('faqs'))->render());
        }elseif($type==4){
            delComities();
        }elseif($type==7){
            $issues=DB::table('notices')->where('type',$type)->orderBy('created_at','desc')->get();
            file_put_contents(resource_path('views/front/cache/page/issues.blade.php'),view('back.notice.template.issues',compact('issues'))->render());
            file_put_contents(resource_path('views/front/cache/page/issuesextra.blade.php'),view('back.notice.template.issuesextra',compact('issues'))->render());

        }
    }



    public function image($type,Request $request){

        return response()->json(
            [
                'success'=> true, // Must be false if upload fails
                'file'=>asset($request->fileToUpload->store('uploads/image/'.(noticeType($type))))
            ]);
    }
}
