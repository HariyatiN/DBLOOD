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
}
