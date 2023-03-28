<?php

namespace App\Http\Controllers;

use App\Models\Registertablemodel;
use Illuminate\Http\Request;

class RegistertableController extends Controller
{
    public function index()
    {
      return view('content.register-table.register-table');
    }
    /**
     * @param  \Illuminate\Http\Request  $resquest
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'name_table' => 'required',
        'no_table' => 'required',
        'emplacement_table' => 'required',
    ]);

        $post = new Registertablemodel;
        $post->name_table =$request->name_table;
        $post->no_table = $request->no_table;
        $post->emplacement_table =$request->emplacement_table;
        $post->save();
   
    return redirect('resgister_table')->with('success','la table est crée');
    }

    public function showtable()
    {
      $list_table = Registertablemodel::all();
      return view('content.register-table.register-table',['list_table'=>$list_table,]);
    }
    public function edit($id)
    {
      $find_table = Registertablemodel::find($id);
      return view('content.register-table.edit-register-table',['find_table'=>$find_table,]);
    }

    public function destroy($id)
    {
      $tab_destroy = Registertablemodel::find($id);
      $tab_destroy->delete();

    return redirect('resgister_table');

    }

    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'name_table' => 'required',
        'no_table' => 'required',
        'emplacement_table' => 'required',
    ]);
      $post = Registertablemodel::find($id);
      $post->name_table =$request->name_table;
      $post->no_table = $request->no_table;
      $post->emplacement_table =$request->emplacement_table;
      $post->save();
      return redirect('resgister_table');
    }
}
