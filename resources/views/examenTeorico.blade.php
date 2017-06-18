@extends('Layouts.LayoutExamen')
@section ('pregunta')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@php($globalSelection=0)
<script>
function cargarPregunta(id)
{
   $globalSelection= id-1;
   @if(isset($preguntas))
   $("#question").html("{{$preguntas[$globalSelection]->value('pregunta')}}");
   $("#option1").attr("value","{{$preguntas[$globalSelection]->value('opcion1')}}");
   $("#option2").attr("value","{{$preguntas[$globalSelection]->value('opcion2')}}");
   $("#option3").attr("value","{{$preguntas[$globalSelection]->value('opcion3')}}");
   $("#option4").attr("value","{{$preguntas[$globalSelection]->value('opcion4')}}");
   $("#imgID").attr("src","{{$preguntas[$globalSelection]->value('imagen')}}");
   @endif
}

function respuestaCorrecta(idOpcion)
{ $opcion=idOpcion.substring(6,7);

  if($opcion=={{$preguntas[$globalSelection]->value('id_correcta')}})
  {
  alert('respuesta correcta');
  }
  else
  {
  alert('respuesta incorrecta');
  }
}
</script>

<div class="container-fluid bg-info">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h3><span class="label label-warning" id="question">{{'Aqui Deberia Cargar La Pregunta'}}</span> </h3>
        </div>
        <div class="modal-body">
        <div class="col-xs-6">
          <div class="quiz" id="quiz" data-toggle="buttons">
         <input type="submit" class="btn btn-primary btn-block" id="option1" value="1" onclick="respuestaCorrecta(this.id)">
          <input type="submit" class="btn btn-primary btn-block" id="option2" value="2" onclick="respuestaCorrecta(this.id)">
            <input type="submit" class="btn btn-primary btn-block" id="option3" value="3" onclick="respuestaCorrecta(this.id)">
              <input type="submit" class="btn btn-primary btn-block" id="option4" value="4" onclick="respuestaCorrecta(this.id)">
       </div>
       </div>
       <div class="col-xs-6">
          <div class="quiz" id="quiz" data-toggle="buttons">
         <img id="imgID" class="img-responsive" alt="Cinque Terre" src="/img/senal.png" >
       </div>
       </div>
       </div>
       </div>
       </div>
       </div>
@endsection


@section('content')
<div class="row">
<div class="container-fluid bg-info">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h3><span class="label label-warning" id="qid">Preguntas</span> </h3>
        </div>
        <div class="modal-body">
@if(isset($preguntas))
@for($i=1;$i<=$preguntas->count();$i++)
<div class="col-xs-2">
<div><h3><span id="daLoMismoMen" ><input type="submit"  id="{{$i}}" class="btn-warning" value="{{$i}}" onclick="cargarPregunta(this.id)"></span> </h3></div>
</div>
 @endfor
 @else
 <div class="col-xs-2">
 <div><h3><input class="label label-warning" id="qid">{{'No Existen Preguntas PreSeleccionadas'}}</input> </h3></div>
</div>
@endif
   </div>
    <div class="modal-footer">
           <div><h3><input type="submit" class="btn-success btn-block" id="qid" value="{{'Evaluar'}}"></input> </h3></div>
        </div>
</div>
</div>
</div>
</div>
@endsection

     