<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendonor;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{


    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'nama' => 'required ',
            'jk' => 'required',
            'tlp' => 'required',
            'alamat' => 'required',
            'gol_darah' => 'required',
            'kode_p' => 'required | unique:pendonor',
            'password' => 'required',
            'confirm_password' => 'required | same:password',

        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 404,
                'message' => "register Gagal !",
                'data'=> $validator->errors()

            ]);
          }


        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $pendonor = Pendonor::create($input);


       $success['nama'] = $pendonor->nama;

    //    dd(success)
        return response()->json([
            'status' => 200,
            'message' => "register Berhasil !",
            'data' => $success,
          ]);
    }
}
