<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Darah;
use App\Models\Produk;

class DarahController extends Controller
{
    function index(Produk $produk)
    {
        $darah= Darah::with(['produk'])->get();

        $data['list'] = $darah;
        return view("admin.darah.index", $data);
    }

    function tambah(){
        return view('admin.darah.tambah');
    }


   function detail(Darah $darah){
    $data['darah'] = $darah;
     return view('admin.darah.detail', $data);
   }



  function edit(Darah $darah, Produk $produk){
    $data['list'] = $darah;

    return view('admin.darah.edit', $data);
}

function aksiEdit(Darah $darah , Request $request){


  $darah->A = $request->input('A+');
  $darah->B = $request->input('B+');
  $darah->O = $request->input('O+');
  $darah->AB = $request->input('AB+');
  $darah->save();
  return redirect('admin/darah')->with('success', 'Stok Darah Berhasil ditambah');
    }
}