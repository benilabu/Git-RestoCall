<?php

namespace App\Http\Controllers\authentications;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;

class RegisterBasic extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-register-basic');
  }


  public function store(Request $request)
{
  
 /*  $request->validate([
  'username' => ['required', 'string', 'max:255'],
  'phone' => ['required', 'string', 'max:15', 'min:8'],
  'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
  'password' => ['required', 'string', 'min:8', 'confirmed'],
  ]); */

 
  $user = User::create([
    'name' => $request->username,
    'phone' => $request->phone,
    'email' => $request->email,
    'role' => $request->role,
    'password' => Hash::make($request->password),
    
  ]);

  $user->attachRole($request->role);
 
  event(new Registered($user));
  Auth::login($user);
 
  return redirect(RouteServiceProvider::HOME);

}

  
/*   protected function validator(array $data)
{
  return Validator::make($data, [
    'name' => ['required', 'string', 'max:255'],
    'phone' => ['required', 'string', 'max:15', 'min:8'],
    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);
} */
/* protected function create(array $data)
{
  return User::create([
    'name' => $data['name'],
    'phone' => $data['phone'],
    'email' => $data['email'],
    'password' => Hash::make($data['password']),
  ]);
} */
}
