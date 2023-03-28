<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registerserveurmodel;
use App\Models\Registercategoriemenuplatmodel;


class RegisterCategoriemenuController extends Controller
{
    public function index()
    {
      return view('content.register-categorie-menu.register-categorie-menu');
    }
      /**
     * @param  \Illuminate\Http\Request  $resquest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'name_categorie'=>'required'
      ]);
    $post = new Registercategoriemenuplatmodel;
    $post->name_categorie = $request->name_categorie;
    $post->save();
    return redirect('register_categorie_menu')->with('success','la categorie est crée');
    }
    
    public function showcat()
    {
      $list_categorie = Registercategoriemenuplatmodel::all();
      return view('content.register-categorie-menu.register-categorie-menu',['list_categorie'=>$list_categorie,]);
    }
    public function edit($id)
    {
      $find_categorie = Registercategoriemenuplatmodel::find($id);
      return view('content.register-categorie-menu.edit-categorie-menu',['find_categorie'=>$find_categorie,]);
    }

    public function destroy($id)
    {
      $cat_destroy = Registercategoriemenuplatmodel::find($id);
      $cat_destroy->delete();

    return redirect('register_categorie_menu');

    }
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'name_categorie'=>'required'
      ]);
      $post = Registercategoriemenuplatmodel::find($id);
      $post->name_categorie = $request->name_categorie;
      $post->save();
      return redirect('register_categorie_menu');
    }
}
