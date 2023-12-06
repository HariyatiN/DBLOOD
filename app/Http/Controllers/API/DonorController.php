<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Donor;

class DonorController extends Controller
{
    public function getData()
    {
        // Ambil semua data donor beserta data pendonor dan darah yang terkait
        $donors = Donor::with(['pendonor', 'darah'])->get();

        // Return data dalam format JSON
        return response()->json(['data' => $donors]);
    }

    // Tambahan: Jika Anda hanya ingin mendapatkan detail dari satu donor berdasarkan ID
    public function getDonorDetailsById($id)
    {
        // Ambil data donor berdasarkan ID beserta data pendonor dan darah yang terkait
        $donor = Donor::with(['pendonor', 'darah'])->find($id);

        // Cek apakah donor ditemukan
        if ($donor) {
            // Return data dalam format JSON
            return response()->json(['data' => $donor]);

        }else{
            return response()->json(['message' => 'Data donor tidak ditemukan']);
        }
    }
}
