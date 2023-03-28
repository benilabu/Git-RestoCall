<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registerserveurmodel;

class RegisterserverController extends Controller
{
    public function index()
    {
      return view('content.register-server.register-server');
    }
    public function showlist()
    {
      $list_serveur = Registerserveurmodel::all();
      return view('content.register-server.register-server-list',['list_serveur'=>$list_serveur,]);
    }
     /**
     * @param  \Illuminate\Http\Request  $resquest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $post = new Registerserveurmodel;
      //dd($post);
     $post->name =$request->name_serveur;
     $post->first_name =$request->firstname;
     $post->email =$request->email;
     $post->no_serveur =$request->no_serveur;
     $post->save();
    // Alert::success('Success','un serveur a été crée');
     return redirect('serveur/resgister_server')->with('success','le serveur est crée');
      
    }
    public function edit()
    {
      
    }
}
