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
    $darah->produk = $request->input('produk');
    $darah->A = $request->input('A+');
    $darah->B = $request->input('B+');
    $darah->O = $request->input('O+');
    $darah->AB = $request->input('AB+');
    $darah->save(); 
    return redirect('admin/darah');
}

  function edit(Darah $darah){
    $data['list'] = $darah;
    return view('admin.darah.edit', $data);
}

function aksiEdit(Darah $darah , Request $request){
  
  $darah->produk = $request->input('produk');
  $darah->A = $request->input('A+');
  $darah->B = $request->input('B+');
  $darah->O = $request->input('O+');
  $darah->AB = $request->input('AB+');
  $darah->save(); 

  return redirect('admin/darah');

    }
}


