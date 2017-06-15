<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mae_usuarios;

class LoginController extends Controller
{
    function Home()
    {
    	
    return view('welcome');
    }


    function Login(Request $request)
    {
      $usuario=$request->input('usuario');
       $password=$request->input('clave');

       $userExist=mae_usuarios::where('usuario', $usuario)
       ->Where('password',$password);    
       
       if($userExist->count()==1)
       {
        return View('examenTeorico', ['user'=> $userExist]);
       }
        
      
    }
   
}
