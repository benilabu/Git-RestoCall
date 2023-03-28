<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Registertablemodel;
use App\Models\User;
use App\Http\Controllers\Controller;

class PlanificationAdminContoller extends Controller
{
    public function index()
    {
      $list_user_serveur = User::where('role','serveur')->get();
      $list_table = Registertablemodel::all();

      return view('content.planification.planification',['list_user_serveur'=>$list_user_serveur, 'list_table'=>$list_table]);
    }
}
