<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamenController extends Controller
{
    function cargarExamen()
    {
    	//$queryPreguntas=mae_preguntas::where('idExamen',1);

    	$preguntas=[
    	'¿Cual es el significado de la senaletica mostrada en la imagen?'
    	];

    	return View('examenTeorico')
    	->with('preguntas',$preguntas);
    }
}
