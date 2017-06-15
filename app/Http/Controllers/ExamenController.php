<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamenController extends Controller
{
    function cargarExamen()
    {
    	//$queryPreguntas=mae_preguntas::where('idExamen',1);

    	$preguntas=[
    	'¿Cual es el significado de la senaletica mostrada en la imagen?',
    	'¿Cual es la velocidad máxima permitida en zona urbana?'
    	];

    	$opciones=['Pista de Doble Sentido',
    	'Permitido virar en U',
    	'No tengo ni puta idea'
    	];

    	return View('examenTeorico')
    	->with('preguntas',$preguntas)
    	->with('opciones', $opciones);
    }
}
