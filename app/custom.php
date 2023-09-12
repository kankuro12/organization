<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class SettingMemory{
    public static $data=[];
}
function getSetting($code,$original=false){

    if(!isset(SettingMemory::$data[$code])){
        SettingMemory::$data[$code]= Cache::rememberForever($code.'_'.($original?'original':'json'),function() use($original,$code){
            $value=(DB::table('settings')->where('code',$code)->first()??((object)['value'=>'']))->value;
            if($original){
                return $value;
            }else{
                if($value==""){
                    return (object)[];
                }else{
                    return json_decode($value);
                }
            }
        });

    }
    return SettingMemory::$data[$code];
}

function setSetting($code,$value,$original=false){
    if(!$original){
        $value=json_encode($value);
    }

    DB::insert("INSERT INTO settings (code, value)
    VALUES (?, ?) ON DUPLICATE KEY UPDATE value = ?",[$code,$value,$value]);
    Cache::forget($code.'_'.($original?'original':'json'));
    try {
        unset( SettingMemory::$data[$code]);
    } catch (\Throwable $th) {
    }
}

function vasset($path){
    return asset($path)."?v=".config('app.version');
}

function isGet() {
    return request()->getMethod()=="GET";
}


function noticeType($type){
    return ['','Notice','News','Issue'][$type];
}

function noticeDate($notice){
    return Carbon::parse($notice->created_at)->format('d M, Y');

}
