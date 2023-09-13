<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function index(Notice $notice){
        $members=DB::table('teams')->where('notice_id',$notice->id)
        ->orderBy('pos','asc')
        ->get();

        return view('back.teams.index',compact('notice','members'));
    }

    public function add(Request $request,Notice $notice){
        if(isGet()){
            return view('back.teams.add',compact('notice'));
        }else{
            $team=new Team();
            $team->notice_id=$notice->id;
            $team->name=$request->name;
            $team->desig=$request->desig;
            $team->address=$request->address??"";
            $team->phone=$request->phone??"";
            $team->email=$request->email??"";
            $team->image=$request->image->store('uploads/members');
            $team->save();
            return redirect()->back()->with('message','member added successfully');
        }
    }

    public function edit(Request $request,Team $team){
        if(isGet()){
            return view('back.teams.edit',compact('team'));
        }else{
            $team->name=$request->name;
            $team->desig=$request->desig;
            $team->address=$request->address??"";
            $team->phone=$request->phone??"";
            $team->email=$request->email??"";
            if($request->hasFile('image')){
                $team->image=$request->image->store('uploads/members');
            }
            $team->save();
            return redirect()->back()->with('message','member updated successfully');
        }
    }

    public function del(Request $request,Team $team){


            $team->delete();
            return redirect()->back()->with('message','member deleted successfully');

    }

}
