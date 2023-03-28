<?php

namespace App\Http\Controllers;

use App\Models\Registermenuplatmodel;
use Illuminate\Http\Request;
use App\Models\Registercategoriemenuplatmodel;


class PagemenuController extends Controller
{
    public function index()
    {
      $liste_categorie = Registercategoriemenuplatmodel::all();
      $liste_menu = Registermenuplatmodel::all();
      return view('content.menu-page.menu-page' ,['liste_categorie'=>$liste_categorie, 'liste_menu'=>$liste_menu]);
    }
}
