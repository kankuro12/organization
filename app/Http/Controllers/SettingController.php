<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function general(Request $request){
        if(isGet()){
            $data=getSetting('general');

            return view('back.setting.general',compact('data'));
        }else{
            $olddata=getSetting('general');
            $data=[
                'phone'=>$request->phone,
                'email'=>$request->email,
                'address'=>$request->address,
                'district'=>$request->district,
                'state'=>$request->state,
                'country'=>$request->country,
                'fb'=>$request->fb,
                'insta'=>$request->insta,
                'twitter'=>$request->twitter,
                'youtube'=>$request->youtube,
            ];
            if($request->hasFile('header_logo')){
                $data['header_logo']=$request->header_logo->store('uploads/general');
            }else{
                $data['header_logo']=$olddata->header_logo;
            }
            if($request->hasFile('footer_logo')){
                $data['footer_logo']=$request->footer_logo->store('uploads/general');
            }else{
                $data['footer_logo']=$olddata->footer_logo;
            }
            setSetting('general',$data);
            return redirect()->back()->with('message','Setting Updated');
        }
    }

    public function donation(Request $request){
        if(isGet()){
            $data=getSetting('donation');

            return view('back.setting.donation',compact('data'));
        }else{
            $olddata=getSetting('donation');
            $data=[
                'title'=>$request->title,
                'about'=>$request->about,
                'extra'=>$request->extra,
            ];
            if($request->hasFile('qr')){
                $data['qr']=$request->qr->store('uploads/donation');
            }else{
                $data['qr']=$olddata->qr;
            }

            setSetting('donation',$data);
            return redirect()->back()->with('message','Setting Updated');
        }
    }
}
