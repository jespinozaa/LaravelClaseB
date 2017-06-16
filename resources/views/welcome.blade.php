<head>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="{{ url('/css/login.css') }}" />
</head>

<body>


<div class="main">
    
    
    <div class="container">
<center>
<div class="middle">
      <div id="login">

        <form action="/login" method="post">
      {{ csrf_field() }}
          <fieldset class="clearfix">

            <p ><span class="fa fa-user"></span><input type="text"  Placeholder="Usuario" name="usuario" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
            <p><span class="fa fa-lock"></span><input type="password"  Placeholder="Password" name="clave" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
            
             <div>
                                <span style="width:48%; text-align:left;  display: inline-block;"><a class="small-text" href="#">Olvidaste tu password?</a></span>
                                <span style="width:50%; text-align:right;  display: inline-block;"><input type="submit" value="Ingresar"></span>
                            </div>

          </fieldset>
<div class="clearfix"></div>
        </form>

        <div class="clearfix"></div>

      </div> <!-- end login -->
      <div class="logo">
      @if(isset($error))
        <kbd> Bienvenido </kbd>
        </div>    
          <div class="clearfix"> </div>
        <span class="label label-danger">{{$error}}</span>
        

      @else
        <div class="logo">
      <kbd>Bienvenido</kbd>
          <div class="clearfix"> </div>
      @endif
      </div>
      
      </div>
</center>
    </div>

</div>
</body>

</html>
