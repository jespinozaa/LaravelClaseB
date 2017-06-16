<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mae_preguntas;

class ExamenController extends Controller
{
    function totalPreguntas()
    {
     
     // TODO : Cambiar el 1 por una variable enviada desde la vista segun el tipo de examen seleccionado
     $preguntas=mae_preguntas::where('id_examen',1)->get();
    	/*$preguntas=[
    	'¿Cual es el significado de la senaletica mostrada en la imagen?',
    	'¿Cual es la velocidad máxima permitida en zona urbana?'
    	];*/

    	/*$opciones=['Pista de Doble Sentido',
    	'Permitido virar en U',
    	'No tengo ni puta idea'
    	];*/
    	return View('examenTeorico')
    	->with('preguntas',$preguntas->count());
    }

    function cargarPregunta()
      {
    $view = View::make('page');

    if(Request::ajax()) {
        $sections = $view->renderSections(); // returns an associative array of 'content', 'head' and 'footer'

        return $sections['content']; // this will only return whats in the content section

    }

    // just a regular request so return the whole view

        return $view;
    }
}
