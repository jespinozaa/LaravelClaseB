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

        return View('examenTeorico');
       /*$usuario=$request->input('usuario');
       $password=$request->input('clave');
       $userExist=mae_usuarios::where('usuario', 'jonathan');    
       dd($userExist->value('password'));*/
    }

    function Examen()
    {
    	$user= mae_usuarios::all();
    	return View('examenTeorico',
            ['user'=> $user]);
    }

   
}
