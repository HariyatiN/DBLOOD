<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
   public  function  getInfo(){
        $info = Info::get();
        return response()->json($info);
    }
    public function getInfoByid($id){
        $info = Info::find($id);

        if($info){
            return response()->json([$info, 'massage:'=>'info']);
        }else{
            return response()->json(['massage:' => 'info tidak ditemukan ']);
        }
    }
}
