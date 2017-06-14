@extends('Layouts.examenTeorico')
@section ('pregunta')

<div class="container-fluid bg-info">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h3><span class="label label-warning" id="qid">¿Cual es la velocidad maxima permitida en zonas urbanas?</span> </h3>
        </div>
        <div class="modal-body">
        <div class="col-xs-6">
            <div class="col-xs-3 col-xs-offset-5">
               <div id="loadbar" style="display: none;">
                  <div class="blockG" id="rotateG_01"></div>
                  <div class="blockG" id="rotateG_02"></div>
                  <div class="blockG" id="rotateG_03"></div>
                  <div class="blockG" id="rotateG_04"></div>
                  <div class="blockG" id="rotateG_05"></div>
                  <div class="blockG" id="rotateG_06"></div>
                  <div class="blockG" id="rotateG_07"></div>
                  <div class="blockG" id="rotateG_08"></div>
              </div>
          </div>

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
            <h3><span class="label label-warning" id="qid">Aqui se listan el total de preguntas</span> </h3>
        </div>
        <div class="modal-body">
<div class="col-xs-2">
 <div><h3><span class="label label-warning" id="qid">1</span> </h3></div> 
</div>
<div class="col-xs-2">
<div><h3><span class="label label-warning" id="qid">2</span> </h3></div>
</div>
<div class="col-xs-2">
 <div> <h3><span class="label label-warning" id="qid">3</span> </h3></div>
</div>
<div class="col-xs-2">
 <div> <h3><span class="label label-warning" id="qid">4</span> </h3></div>
</div>
   </div>
   <div class="modal-footer text-muted">
    <span id="answer"></span>
</div>
</div>
</div>
</div>
</div>
@endsection

     