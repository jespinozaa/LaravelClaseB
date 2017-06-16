<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<link rel="stylesheet" type="text/css" href="{{ url('/css/examenTeorico.css') }}" />
<script type="text/javascript" src="{{  url('/js/examenTeorico.js') }}"></script>

<div class="container">
  <div class="jumbotron">
    
    <h1>Bienvenido 
    <!--Valida que la variable este definica y no sea nula y obtiene el usuario , si no lo deja como invitado-->
    @if(isset($user))
    {{$user->value('usuario')}}
    @else 
    {{'Invitado'}}
    @endif
    </h1>

    <p></p> 
  </div>

</div>
    <form action="/cargarExamen" method="post">
      {{ csrf_field() }}
<div class="row">
   <div class="col-xs-12">
   <fieldset class="clearfix">
 <div class="container-fluid bg-info">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h3><span class="label label-warning" id="qid">Selecciona el Examen que desees rendir</span> </h3>
        </div>
        <div class="modal-body">
        <div class="col-xs-6">
          <div class="quiz" id="quiz" data-toggle="buttons">
          @if(isset($examenes))
          @foreach($examenes as $examen)
           <label class="element-animation1 btn btn-lg btn-primary btn-block"> <input type="submit" name="examen" id="examen" value="{{$examen->value('id_examen')}}">{{'Examen Paginas: '}} {{$examen->value('pagina_inicio')}}{{'-'}} {{$examen->value('pagina_final')}}</label>
           @endforeach
           @else
           <label class="element-animation1 btn btn-lg btn-primary btn-block"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="radio" name="q_answer" value="1">{{'No Existen Examenes Pre Configurados'}}</label>
           @endif
       </div>
       </div>
     </fieldset>
   </div>
   </div>
   </form>

   