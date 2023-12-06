<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Darah;

class DarahController extends Controller
{
    function index(){

    $data ["list"] = Darah::orderBy('updated_at', 'desc')->get();
    return view("admin.darah.index", $data);
    }

    function tambah(){
        return view('admin.darah.tambah');
    }
    
    
   function detail(Darah $darah){
    $data['darah'] = $darah;
     return view('admin.darah.detail', $data);
   }

   function aksitambah(Request $request){
    $darah = new Darah;
    $darah->jenis_gol = $request->input('jenis_gol');
    $darah->stok_darah = $request->input('stok_darah');
    $darah->save(); 
    return redirect('admin/darah');
}

  function edit(Darah $darah){
    $data['list'] = $darah;
    return view('admin.darah.edit', $data);
}

// function aksiEdit(Darah $darah , Request $request){
//   $x = $request->file('thumbnail');

//     if($x != null){
      
//       $file = $darah->foto;
//       $hapus = File::delete($file);
//       $ext = $request->file('thumbnail')->extension();
//       $name = Hash::make($x);
//       $namaFile = $name.'.'.$ext;
  
//       $path = $x->storeAs('darah',$namaFile);
//       $darah->jenis_gol = $request->jenis_gol;
//       $darah->stok_darah = $request->stok_darah;
//       $darah->save(); 
//       return redirect('admin/darah')->with('success', 'Data berhasil diupdate');
//     }else{
//       return back()->with('danger', 'Data gagal disimpan');

//     }
// }

}
