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
      /*$usuario=$request->input('usuario');
       $password=$request->input('clave');

       $userExist=mae_usuarios::where('usuario', $usuario)
       ->Where('password',$password);    
       
       if($userExist->count()==1)
       {
        return View('bienvenidaExamen', ['user'=> $userExist]);
         return View('bienvenidaExamen')
         ->with('user'=> $userExist);
       }*/

       $examenes=[
        'examen 1 pag 1-19',
          'examen 2 pag 2-30',
            'examen 3 pag 30-50',
              'examen 4 pag 51-180'
       ];

        return View('bienvenidaExamen')
        ->with('examenes',$examenes);
      
    }


    function LogOut()
    {

    }
   
}
