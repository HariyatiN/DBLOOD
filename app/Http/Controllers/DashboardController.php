<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;
class DashboardController extends Controller
{
    function index(){

        $data['totalAdmins'] = Admin::count();
        return view("welcome", $data);
    }
}
