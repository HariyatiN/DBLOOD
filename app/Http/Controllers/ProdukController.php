<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produk;
class ProdukController extends Controller
{

        function tambah(){
            return view('admin.darah.tambah');
        }


        function aksitambah(Request $request){
            $produk = new Produk;
            $produk->produk = $request->input('produk');
            $produk->save();
            return redirect('admin/darah');
        }
}
