@extends('Layouts.LayoutExamen')
@section ('pregunta')

<div class="container-fluid bg-info">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h3><span class="label label-warning" id="qid">¿Cual es la velocidad maxima permitida en zonas urbanas?</span> </h3>
        </div>
        <div class="modal-body">
        <div class="col-xs-6">
          <div class="quiz" id="quiz" data-toggle="buttons">
           <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">30 km/h</label>
           <label class="element-animation2 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="2">45 km/h</label>
           <label class="element-animation3 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="3">20 km/h</label>
           <label class="element-animation4 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="4">60 km/h</label>
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
 @php ($contador = 1)
@foreach($preguntas as $pregunta)
<div class="col-xs-2">
 <div><h3><span class="label label-warning" id="qid">{{$contador}}</span> </h3></div>
</div>
 @php ($contador += 1)
 @endforeach
 @else
 <div class="col-xs-2">
 <div><h3><span class="label label-warning" id="qid">{{'No Existen Preguntas PreSeleccionadas'}}</span> </h3></div>
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

     