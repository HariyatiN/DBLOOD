<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Darah;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    function getData(Request $request){
        $darah = Darah::get();
        if($darah){
            return response()->json([
                'status' => 200,
                'message' => 'Data berhasil diload !',
                'data' => $darah,
            ]);
        }else{
            return response()->json([
                'status' => 404,
                'message' => 'Data darah tidak ditemukan !',
                'data' => null,
            ]);
        }
        
    }

    
}
