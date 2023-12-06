<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Darah;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    function getData(Request $request){
        $darah = Darah::get();
        return response()->json($darah);
    }

    
}
