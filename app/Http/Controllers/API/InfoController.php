<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
   public  function  getInfo(){
        $info = Info::get();
        if($info){
            return response()->json([
                'status' => 200,
                'message' => 'Data berhasil diload !',
                'data' => $info,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Data darah tidak ditemukan !',
                'data' => null,
            ]);
        }
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
