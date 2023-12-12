<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function registrasion(Request $request){
        $this->validate($request, [
            'nama' => 'required',
            'jk' => 'required',
            'tlp' => 'required',
            'alamat' => 'required',
            'gol_darah' => 'required',
            'kode_p' => 'required',
            'password' => 'required',
        ]);
    }
}
