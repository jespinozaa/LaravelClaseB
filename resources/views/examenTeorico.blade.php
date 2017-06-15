@extends('Layouts.LayoutExamen')
@section ('pregunta')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@php($globalSelection=0)
<script>
function cargarPregunta(id)
{
   $globalSelection= id;
   alert($globalSelection);
}
</script>

<div class="container-fluid bg-info">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
          <!--@php($contadorPreguntas=1)
         @foreach($preguntas as $pregunta)
            <h3><span class="label label-warning" id="{{$contadorPreguntas}}">{{$pregunta}}</span> </h3>
              @php($contadorPreguntas+=1)
         @endforeach-->
            <h3><span class="label label-warning" id="{{$contadorPreguntas}}">{{$preguntas[$globalSelection]}}</span> </h3>
        </div>
        <div class="modal-body">
        <div class="col-xs-6">
          <div class="quiz" id="quiz" data-toggle="buttons">
          @foreach($opciones as $opcion)
           <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">{{$opcion}}</label>
           @endforeach
       </div>
       </div>


       <div class="col-xs-6">
          <div class="quiz" id="quiz" data-toggle="buttons">
         <img class="img-responsive" alt="Cinque Terre" src="/img/senal.png" >
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
 @php ($contador = 0)
@foreach($preguntas as $pregunta)
<div class="col-xs-2">
<div><h3><span id="{{$contador}}" ><input type="submit"  id="seleccionPregunta" class="btn-warning" value="{{$contador}}" onclick="cargarPregunta(this.value)"></span> </h3></div>
</div>
 @php ($contador += 1)
 @endforeach
 @else
 <div class="col-xs-2">
 <div><h3><input class="label label-warning" id="qid">{{'No Existen Preguntas PreSeleccionadas'}}</input> </h3></div>
</div>
@endif

   </div>
   <div class="modal-footer text-muted">
    <span id="answer"></span>
</div>
</div>
</div>
</div>
</div>
@endsection

     