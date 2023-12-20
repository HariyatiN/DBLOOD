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

    function delete(Admin $admin){
     $delete = $admin->delete();

     if($delete){

       return redirect('admin/admins');
     }else{
      return ('delete data gagal');
     }
  }
}
