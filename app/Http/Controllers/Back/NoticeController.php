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
            $notice->file=$request->file->store('uploads/image');
            $notice->short_desc=$request->short_desc;
            $notice->desc=$request->desc;
            $notice->type=$type;
            $notice->save();
            return redirect()->back()->with('Notice added successfully');
        }
    }

    function render($type){
        if($type==1){
            $notices=DB::table('notices')->orderBy('created_at','desc')->take(4)->get();
            file_put_contents(resource_path('views/front/cache/home/notices.blade.php'),view('back.notice.template.notice',compact('notices'))->render());
        }
    }
}
