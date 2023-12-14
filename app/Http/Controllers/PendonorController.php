<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\Darah;
use App\Models\Pendonor;
class PendonorController extends Controller
{
  function index(){

    $data ["list"] = Pendonor::orderBy('updated_at', 'desc')->get();
    return view("admin.pendonor.index", $data);
  }
  function tambah(){
    return view('admin.pendonor.tambah');
  }
  function detail(Pendonor $pendonor){
    $data['pendonor'] = $pendonor;
     return view('admin.pendonor.detail', $data);
   }
  function aksitambah(Request $request){

    // $validated = $request->validate([Pendonor::$inputan, Pendonor::$pesan]);

    // cek file upload

    $x = $request->file('foto');
    if($x != null){
      $ext = $request->file('foto')->extension();
      $name = Hash::make($x);
      $namaFile = $name.'.'.$ext;


      $path = $x->storeAs('pendonor', $namaFile);


      $p = new Pendonor;
      $p->nama = $request->nama;
      $p->jk = $request->jk;
      $p->tlp = $request->tlp;
      $p->alamat = $request->alamat;
      $p->gol_darah = $request->gol_darah;
      $p->kode_p = $request->kode_p;
      $p->password = bcrypt($request->password);
      $p->foto = 'app/'.$path;

      $p->save();


      return redirect('admin/pendonor')->with('success', 'Data berhasil disimpan');
    }else{
      return back()->with('danger', 'Data gagal disimpan');

    }

  }

  function edit(Pendonor $pendonor){
    $data['list'] = $pendonor;
    return view('admin.pendonor.edit', $data);
  }

  function aksiedit(Request $request, Pendonor $pendonor){



    if($request->password != null){

      if($request->foto != null){
        $x = $request->file('foto');

        $file = $pendonor->foto;
        // Hapus foto lama
        $hapus = File::delete($file);

        $ext = $request->file('foto')->extension();
        $name = Hash::make($x);
        $namaFile = $name.'.'.$ext;

        $path = $x->storeAs('pendonor', $namaFile);


        $pendonor->nama = $request->nama;
        $pendonor->jk = $request->jk;
        $pendonor->tlp = $request->tlp;
        $pendonor->alamat = $request->alamat;
        $pendonor->gol_darah = $request->gol_darah;
        $pendonor->kode_p = $request->kode_p;
        $pendonor->password = bcrypt($request->password);
        $pendonor->foto = 'app/'.$path;

        $pendonor->update();

        return redirect('admin/pendonor')->with('success', 'Data berhasil diupdate');
      }else{

        $pendonor->nama = $request->nama;
        $pendonor->jk = $request->jk;
        $pendonor->tlp = $request->tlp;
        $pendonor->alamat = $request->alamat;
        $pendonor->gol_darah = $request->gol_darah;
        $pendonor->kode_p = $request->kode_p;
        $pendonor->password = bcrypt($request->password);

        $pendonor->update();

        return redirect('admin/pendonor')->with('success', 'Data berhasil diupdate');
    }

    }else{

      if($request->foto != null){

        $x = $request->file('foto');
        $file = $pendonor->foto;
        // Hapus foto lama
        $hapus = File::delete($file);

        $ext = $request->file('foto')->extension();
        $name = Hash::make($x);
        $namaFile = $name.'.'.$ext;

        $path = $x->storeAs('pendonor', $namaFile);


        $pendonor->nama = $request->nama;
        $pendonor->jk = $request->jk;
        $pendonor->tlp = $request->tlp;
        $pendonor->alamat = $request->alamat;
        $pendonor->gol_darah = $request->gol_darah;
        $pendonor->kode_p = $request->kode_p;
        $pendonor->foto = 'app/'.$path;

        $pendonor->update();

        return redirect('admin/pendonor')->with('success', 'Data berhasil diupdate');
      }else{
        $pendonor->nama = $request->nama;
        $pendonor->jk = $request->jk;
        $pendonor->tlp = $request->tlp;
        $pendonor->alamat = $request->alamat;
        $pendonor->gol_darah = $request->gol_darah;
        $pendonor->kode_p = $request->kode_p;

        $pendonor->update();

        function destroy(Pendonor $pendonor){
          $pendonor->delete();
      
        return redirect('admin/darah');
        
        }
        return redirect('admin/pendonor')->with('success', 'Data berhasil diupdate');
      }
    }


  }




}
