<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use App\Models\Pendonor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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


   public function uploadFoto(Request $request, $id){
    // Validate the request data, including the 'foto' field
    $request->validate([
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',

    ]);

    // Find the Pendonor model by ID
    $pendonor = Pendonor::findOrFail($id);

    // Delete the existing photo if it exists
    if (!empty($pendonor->foto)) {
        $oldFilePath = public_path('profile') . '/' . $pendonor->foto;
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath);
        }
    }

    if($request->hasFile('foto')){
        $file = $request->file('foto');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('app/pendonor'), $fileName);
        $pendonor->foto = $file;
    }


    $pendonor->save();

    return response()->json([
        'status' => 200,
        'message' => 'Foto Pendonor berhasil diubah!',
        'data' => $pendonor,
    ]);
}

public function showFoto($id)
{
    // Find the Pendonor model by ID
    $pendonor = Pendonor::findOrFail($id);

    // Check if the 'foto' field is not empty
    if (!empty($pendonor->foto)) {
        $filePath = public_path('app/pendonor') . '/' . $pendonor->foto;

        // Check if the file exists
        if (file_exists($filePath)) {
            // Return the image with appropriate headers
            return response()->file($filePath);
        }
    }

    // If the foto doesn't exist, you may return a default image or handle it based on your requirements
    return response()->json([
        'status' => 404,
        'message' => 'Foto Pendonor tidak ditemukan',
    ], 404);
}

}
