<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Registermenuplatmodel;
use App\Models\Registercategoriemenuplatmodel;

class RegistermenuController extends Controller
{
    public function index()
    {
    $liste_categorie = Registercategoriemenuplatmodel::all();
      return view('content.register-menu.register-menu',['liste_categorie'=>$liste_categorie,]);
    }
     /**
     * @param  \Illuminate\Http\Request  $resquest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
      
   //   dd($post);
      $this->validate($request, [
        'name_plat' => 'required',
        'no_plat' => 'required',
        'prix_plat' => 'required',
        'time_cuisson' => 'required',
        'description_plat' => 'required',
        'categorie_plat' => 'required',
    ]);
    $post = new Registermenuplatmodel;
     $post->name_plat =$request->name_plat;
     $post->no_plat =$request->no_plat;
     $post->prix_plat =$request->prix_plat;
     $post->time_cuisson =$request->time_cuisson;
     $post->description_plat =$request->description_plat;
     $post->categorie_plat =$request->categorie_plat;
   //  $post->photo_plat =$request->photo_plat;
     if($request->file('photo_plat')){
      $file= $request->file('photo_plat');
      $filename= date('YmdHi').$file->getClientOriginalName();
      $file-> move(public_path('public/assets/img'), $filename);
      $post['photo_plat'] = $filename;
     }
   // dd($post);
     $post->save();
    // Alert::success('Success','un serveur a été crée');
     return redirect('resgister_menu')->with('success','le serveur est crée');


    }
}
