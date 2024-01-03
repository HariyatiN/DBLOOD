<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendonor;
use App\Models\Admin;
use App\Models\Info;
use App\Models\Darah;
use App\Models\Produk;
class DashboardController extends Controller
{
    function index(Produk $produk){

        $data['totalAdmins'] = Admin::count();
        $data['totalPendonor'] = Pendonor::count();
        $data['totalInfo'] = Info::count();
        $data['totalDarah'] = Darah::count();
        $darah = Darah::with(['produk'])->get();

      // Calculate total stock for each product
      $totalStock = [];
      foreach ($darah as $item) {
          $productId = $item->produk->id;

          if (!isset($totalStock[$productId])) {
              $totalStock[$productId] = [
                  'product' => $item->produk,
                  'total' => 0,
              ];
          }

          $totalStock[$productId]['total'] += $item->A + $item->B + $item->O + $item->AB;
      }

      $data['totalStock'] = $totalStock;

        return view("welcome", $data);
    }
}
