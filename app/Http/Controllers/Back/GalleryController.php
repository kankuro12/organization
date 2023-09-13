<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Notice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    public function index(Notice $notice) {
        $galleries = Gallery::where('notice_id',$notice->id)->get();
        return view('back.gallery.index',compact('galleries','notice'));
    }

    public function del(Request $request){
        $gallery=Gallery::where('id',$request->id)->first();
        unlink(public_path($gallery->file));
        unlink(public_path($gallery->thumb));
        $gallery->delete();
        delGallery($request->notice_id);
    }

    public function add(Request $request,$notice){
        $path="uploads/gallery/". date('Y/m/d');

        $galleries=[];
        foreach ($request->datas as $key => $file) {
            $gallery=new Gallery();
            $gallery->file=$file->store($path);
            $gallery->thumb=createThumbnail(public_path($gallery->file),$path);
            $gallery->notice_id=$notice;
            $gallery->save();
            $galleries[]=$gallery;
        }

        delGallery($notice);

        return response()->json($galleries);
    }
}
