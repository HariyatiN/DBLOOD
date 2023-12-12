<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\PendonorStoreRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\Pendonor;
class PendonorController extends Controller
{
    public function getPendonor()
    {
        $pendonor = Pendonor::get();

        return response()->json($pendonor);
   }

   public function getPendonorById($id)
   {
       $pendonor = Pendonor::find($id);

       if ($pendonor) {
        return response()->json([
            'status' => 200,
            'message' => 'Data berhasil diload !',
            'data' => $pendonor,
        ]);
       } else {
        return response()->json([
            'status' => 404,
            'message' => 'Data pendonor tidak ditemukan !',
            'data' => null,
        ]);
       }
   }

   public function createPendonor(PendonorStoreRequest $request)
   {

       // Check file upload
       if ($request->hasFile('foto')) {
           $foto = $request->file('foto');
           $ext = $foto->extension();
           $name = Hash::make($foto->getClientOriginalName()); // Use the original file name for hash
           $namaFile = $name . '.' . $ext;

           // Store the file in the 'public/app/pendonor' directory
           $path = $foto->storeAs('public/app/pendonor', $namaFile);

           // Create a new Pendonor instance
           $pendonor = new Pendonor([
               'nama' => $request->input('nama'),
               'jk' => $request->input('jk'),
               'tlp' => $request->input('tlp'),
               'alamat' => $request->input('alamat'),
               'gol_darah' => $request->input('gol_darah'),
               'kode_p' => $request->input('kode_p'),
               'password' => bcrypt($request->input('password')),
               'foto' => 'app/pendonor/' . $namaFile,
               // Add other fields as needed
           ]);

           // Save the pendonor data to the database
           $pendonor->save();

           // Return a JSON response with the saved pendonor data
           return response()->json(['data' => $pendonor, 'message' => 'Pendonor created successfully'], 201);
       } else {
           return response()->json(['message' => 'Data pendonor tidak ditemukan']);
       }
   }
}
