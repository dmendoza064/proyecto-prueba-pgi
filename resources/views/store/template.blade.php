<!DOCTYPE html>
<html lang="es">
<!--<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'My Laravel Store')</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster+Two' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>-->
@section('headfront')
 @include('store.partials.headfront')
@show
<body>
	<header class="jumbotron ">
  <div class=" row  ">
    
      <div class="col-md-4 center-block quitarFloat ">
       <div class="portada1  ">
        <img src="\imagenes\fotos\BUENO 1 NEGRO.png " class=" estiloImagen text-center" alt="Responsive image"  >
       </div>
      <!-- <div class=" ">
        
          <h1 class="grande">PLATAFORMA DE GARANTIA INMOBILIARIA</h1>
          <h2 class=" ">Lo mas importante para nostos eres tú... ¡No estas solo!</h2>
       </div> -->
       </div>
    
    </div>

</header>
	

	@if(\Session::has('message'))
		@include('store.partials.message')
	@endif
	
	@include('store.partials.nav')

	@yield('content')

	@include('store.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/pinterest_grid.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>