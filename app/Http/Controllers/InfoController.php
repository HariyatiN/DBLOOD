<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Info;

class InfoController extends Controller
{
   function index(){
    $data['list'] = Info::orderBy('updated_at', 'desc')->get();
    return view('admin.info.index', $data);
   }

   function tambah(){

    return view('admin.info.tambah');
   }

   function detail(Info $info){
    $data['info'] = $info;
     return view('admin.info.detail', $data);
   }

   function aksitambah(Request $request){

    $validated = $request->validate([Info::$inputan, Info::$pesan]);
    $i = new Info;
    // cek file upload
    $x = $request->file('thumbnail');

    if($x != null){
      $ext = $request->file('thumbnail')->extension();
      $name = Hash::make($x);
      $namaFile = $name.'.'.$ext;
  
      $path = $x->storeAs('info', $namaFile);
  
    
      $i->judul = $request->judul;
      $i->thumbnail ='app/'.$path;
      $i->deskripsi =$request->deskripsi;
      $i->save(); 
      
      return redirect('admin/info')->with('success', 'Data berhasil disimpan');
    }else{
      return back()->with('danger', 'Data gagal disimpan');
    }

   
  }

  function edit(Info $info){
    $data['list'] = $info;
    return view('admin.info.edit', $data);
}

function aksiEdit(Info $info , Request $request){
  $x = $request->file('thumbnail');

    if($x != null){
      
      $file = $info->foto;
      $hapus = File::delete($file);
      $ext = $request->file('thumbnail')->extension();
      $name = Hash::make($x);
      $namaFile = $name.'.'.$ext;
  
      $path = $x->storeAs('info',$namaFile);
      $info->judul = $request->judul;
      $info->thumbnail = 'app/'.$path;
      $info->deskripsi = $request->deskripsi;
      $info->save(); 
      return redirect('admin/info')->with('success', 'Data berhasil diupdate');
    }else{
      return back()->with('danger', 'Data gagal diupdate');

    }
}


}

