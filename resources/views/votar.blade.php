<!DOCTYPE html>
<html>
<head>
	<title>Votación</title>
	<meta http-equiv="cache-control" content="max-age=0" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta http-equiv="cache-control" content="no-store" />
	<meta http-equiv="cache-control" content="must-revalidate" />
	<meta http-equiv="expires" content="0" />
	<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
	<meta http-equiv="pragma" content="no-cache" />
</head>
<body>

<li class="nav-item">
  <a class="nav-link disabled" href="{{ url('/logout') }}">Salir</a>
</li>

@if(Auth::user()->votoRealizado == true)

<h1>Tu voto ya fue enviado!</h1>

@endif

@if(Auth::user()->votoRealizado == false)
<label>Opción A</label><input type="button" id="id_button_a" onclick="gestionarVoto('a')" value="Votar">
<label>Opción B</label><input type="button" id="id_button_b" onclick="gestionarVoto('b')" value="Votar">
<label>Opción C</label><input type="button" id="id_button_c" onclick="gestionarVoto('c')" value="Votar">


<form action='/votacion' method="post">
	@csrf
	<div hidden>
		<input type="text" name="opcionA" id="id_input_a" value="">
		<input type="text" name="opcionB" id="id_input_b" value="">
		<input type="text" name="opcionC" id="id_input_c" value="">
	</div>
	<br>
	
	<button id="id_button_enviar" type="submit" onclick="desaparece()">Enviar votación</button>
</form>
@endif

<script src="js/manejoVotos.js"></script>
</body>
</html>