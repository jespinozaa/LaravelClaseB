<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mae_preguntas;

class ExamenController extends Controller
{
    function totalPreguntas(Request $request)
    {
     $idExamen=$request->input('examen');
     $preguntaGlobal=mae_preguntas::where('id_examen', $idExamen)->get();
    	return View('examenTeorico')
    	->with('preguntas',$preguntaGlobal);
    }


}
