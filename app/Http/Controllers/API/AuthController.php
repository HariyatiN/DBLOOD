<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendonor;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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


        return response()->json([
            'status' => 200,
            'message' => "register Berhasil !",
            'data' => $success,
          ]);
    }




    function login(Request $request)
    {
        $credentials = $request->validate([
            'kode_p' => ['required'],
            'password' => ['required'],
        ]);

        try {
            if (Auth::guard('pendonor')->attempt($credentials, true)) {
                $pendonor = Auth::guard('pendonor')->user();
                return response()->json([
                    'status' => 200,
                    'message' => "Login berhasil!",
                    'data' => $pendonor,
                ]);
            } else {
                return response()->json([
                    'status' => 401, // Unauthorized
                    'message' => "Kode pengguna atau kata sandi tidak valid.",
                    'data' => null,
                ]);
            }
        } catch (\Exception $e) {
            // Handle exceptions if needed
            return response()->json([
                'status' => 500, // Internal Server Error
                'message' => "Terjadi kesalahan dalam proses login.",
                'data' => $e,
            ]);
        }
    }
}
