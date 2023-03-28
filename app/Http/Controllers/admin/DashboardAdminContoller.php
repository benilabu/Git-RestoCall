<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Registertablemodel;
use App\Http\Controllers\Controller;

class DashboardAdminContoller extends Controller
{
    public function index()
    {
      $list_table = Registertablemodel::all();
      $count_table = count($list_table);
      return view('content.gestion-admin.dashboard-admin',['count_table'=>$count_table]);
    }
}
