<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendonor;
use App\Models\Admin;
use App\Models\Info;
class DashboardController extends Controller
{
    function index(){

        $data['totalAdmins'] = Admin::count();
        $data['totalPendonor'] = Pendonor::count();
        $data['totalInfo'] = Info::count();
        return view("welcome", $data);
    }
}
