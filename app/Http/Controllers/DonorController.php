<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\Pendonor;
use App\Models\Darah;

class DonorController extends Controller
{
    public function index()
    {
        $data['list'] = Donor::orderBy('updated_at', 'desc')->get();
        return view('admin.donor.index', $data);
    }

    public function tambah()
    {
        $data['pendonor'] = Pendonor::all();
        $data['darah'] = Darah::all();
        return view('admin.donor.tambah', $data);
    }

    public function detail(Donor $donor)
    {
        $data['donor'] = $donor;
        return view('admin.donor.detail', $data);
    }

    public function aksitambah(Request $request)
    {
        $validated = $request->validate([
            'pendonor_id' => 'required',
            'darah_id' => 'required',
            'tanggal_donasi' => 'required',
            // Add other validation rules as needed
        ]);

        $donor = new Donor;
        $donor->pendonor_id = $request->pendonor_id;
        $donor->darah_id = $request->darah_id;
        $donor->tanggal_donasi = $request->tanggal_donasi;

        $donor->save();

        return redirect('admin/donor')->with('success', 'Data berhasil disimpan');
    }

    public function edit(Donor $donor)
    {
        $data['donor'] = $donor;
        $data['pendonor'] = Pendonor::all();
        $data['darah'] = Darah::all();
        return view('admin.donor.edit', $data);
    }

    public function aksiEdit(Donor $donor, Request $request)
    {
        $validated = $request->validate([
            'pendonor_id' => 'required',
            'darah_id' => 'required',
            'tanggal_donasi' => 'required',
            // Add other validation rules as needed
        ]);

        $donor->pendonor_id = $request->pendonor_id;
        $donor->darah_id = $request->darah_id;
        $donor->tanggal_donasi = $request->tanggal_donasi;

        $donor->save();

        return redirect('admin/donor')->with('success', 'Data berhasil diupdate');
    }

    public function delete(Donor $donor)
    {
        $donor->delete();
        return redirect('admin/donor')->with('success', 'Data berhasil dihapus');
    }
}
