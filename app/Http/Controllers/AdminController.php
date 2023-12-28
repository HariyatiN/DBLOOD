<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Models\Admin;

class AdminController extends Controller
{
    public function index(){
      $data['list'] = Admin::orderBy('updated_at', 'desc')->get();
      return view('admin.admins.index', $data);
    }

    public function tambah(){
         return view('admin.admins.tambah');
    }

    function aksitambah(Request $request){

      // $validated = $request->validate([Pendonor::$inputan, Pendonor::$pesan]);

      // cek file upload

      $x = $request->file('foto');
      if($x != null){
        $ext = $request->file('foto')->extension();
        $name = Hash::make($x);
        $namaFile = $name.'.'.$ext;


        $path = $x->storeAs('admin', $namaFile);


        $a = new Admin;
        $a->nama = $request->nama;
        $a->email = $request->email;
        $a->password = bcrypt($request->password);
        $a->foto ='app/'.$path;

        $a->save();


        return redirect('admin/admin')->with('success', 'Data berhasil disimpan');
      }else{
        return back()->with('danger', 'Data gagal disimpan');

      }

    }

    function edit(Admin $admin){
      $data['list'] = $admin;
      return view('admin.admins.edit', $data);
  }

  function aksiedit(Request $request, Admin $admin){

    $validatedData = $request->validate([
        'password' => ['required', 'string', 'min:8'],

    ]);

    if($request->password != null){

      if($request->foto != null){
        $x = $request->file('foto');

        $file = $admin->foto;
        // Hapus foto lama
        $hapus = File::delete($file);

        $ext = $request->file('foto')->extension();
        $name = Hash::make($x);
        $namaFile = $name.'.'.$ext;

        $path = $x->storeAs('info', $namaFile);


        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->foto ='app/'.$path;
        $admin->update();
        return redirect('admin/admin')->with('success', 'Data berhasil diupdate');
      }else {
        $x = $request->file('foto');

        $file = $admin->foto;
        // Hapus foto lama
        $hapus = File::delete($file);

        $ext = $request->file('foto')->extension();
        $name = Hash::make($x);
        $namaFile = $name.'.'.$ext;

        $path = $x->storeAs('admin', $namaFile);

        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->foto ='app/'.$path;
        $admin->update();
        return redirect('admin/admin')->with('warning', 'Data berhasil diupdate');
    }

    }else{

      if($request->foto != null){

        $x = $request->file('foto');

        $file = $admin->foto;
        // Hapus foto lama
        $hapus = File::delete($file);

        $ext = $request->file('foto')->extension();
        $name = Hash::make($x);
        $namaFile = $name.'.'.$ext;

        $path = $x->storeAs('admin', $namaFile);

        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);
        $admin->foto ='app/'.$path;
        $admin->update();



        return redirect('admin/admin')->with('warning', 'Data berhasil diupdate');
      }else {
        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->password = bcrypt($request->password);


        $admin->update();


        return redirect('admin/admin')->with('success', 'Data berhasil diupdate');
      }
    }


  }


  function detail(Admin $admin){

    $data['admin'] = $admin;

    return view('admin.admins.detail', $data);

  }

    function delete(Admin $admin){

   $admin->delete();

       return redirect('admin/admin')->with('danger', 'Data Berhasil Dihapus');

  }
}
