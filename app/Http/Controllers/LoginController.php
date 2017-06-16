<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mae_usuarios;
use App\mae_examenes;

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

//Validacion de usuarios
       $userExist=mae_usuarios::where('usuario', $usuario)
       ->Where('password',$password);    
       
       //Carga de Examenes
       $examenes=mae_examenes::all();

       if($userExist->count()==1)
       {
         return View('bienvenidaExamen')
         ->with('user',$userExist)
         ->with('examenes',$examenes);
       }else
       { 
        return View('welcome')
        ->with('error','Usuario o Clave Incorrectos');
      }      
    }


    function LogOut()
    {

    }
   
}
