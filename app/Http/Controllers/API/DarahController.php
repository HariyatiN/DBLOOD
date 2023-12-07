<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Darah;

class DarahController extends Controller
{
    public function getDarah(){
        $darah = Darah::get();


        return response()->json($darah);

    }

    public function getDarahById($id){
        $darah= Darah::find($id);

        if($darah){
            return response()->json($darah);


        }else{
            return response()->json(['message' =>'darah tidak ditemukan', 'status'=>404]);

        }
    }
}
