<!DOCTYPE html>
<html>
<head>
	<title>Votación</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="/balanza_justicia.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
    VotAr
  </a>
</nav>

@if(Auth::user()->votoRealizado == true)

<div class="alert alert-success" role="alert">
  ¡Tu voto ya fue enviado exitosamente!
</div>
<div class="trans" style="display: flex; justify-content: center;">
	<a class="btn btn-outline-danger" href="{{ url('/logout') }}">Salir</a>
</div>

@endif

@if(Auth::user()->votoRealizado == false)
<!--label>Opción A</label><input type="button" id="id_button_a" onclick="gestionarVoto('a')" value="Votar">
<label>Opción B</label><input type="button" id="id_button_b" onclick="gestionarVoto('b')" value="Votar">
<label>Opción C</label><input type="button" id="id_button_c" onclick="gestionarVoto('c')" value="Votar"-->
<div class="container" style="margin-top: 1px;">
	<div class="row d-flex justify-content-center">
		<div class="card col-lg-3" style="width: 16rem; float: left; margin: 20px;">
		  <img src="/balanza_justicia.jpg" style="height: 14rem;" class="card-img-top" alt="opcionA">
		  <div class="card-body">
		    <h5 class="card-title">Opción A</h5>
		    <p class="card-text">Breve descripción de la Opción A.</p>
		    <input type="button" id="id_button_a" onclick="gestionarVoto('a')" class="btn btn-info" value="¡Votar Opción A!">
		  </div>
		</div>
		
		<div class="card col-lg-3" style="width: 16rem; float: left; margin: 20px;">
		  <img src="/balanza_justicia.jpg" style="height: 14rem;" class="card-img-top" alt="opcionB">
		  <div class="card-body">
		    <h5 class="card-title">Opción B</h5>
		    <p class="card-text">Breve descripción de la Opción B.</p>
		    <input type="button" id="id_button_b" onclick="gestionarVoto('b')" class="btn btn-danger" value="¡Votar Opción B!">
		  </div>
		</div>
		
		<div class="card col-lg-3" style="width: 16rem; float: left; margin: 20px;">
		  <img src="/balanza_justicia.jpg" style="height: 14rem;" class="card-img-top" alt="opcionC">
		  <div class="card-body">
		    <h5 class="card-title">Opción C</h5>
		    <p class="card-text">Breve descripción de la Opción C.</p>
		    <input type="button" id="id_button_c" onclick="gestionarVoto('c')" class="btn btn-success" value="¡Votar Opción C!">
		  </div>
		</div>
	</div>
</div>

<form action='/votacion' method="post">
	@csrf
	<div hidden>
		<input type="text" name="opcionA" id="id_input_a" value="">
		<input type="text" name="opcionB" id="id_input_b" value="">
		<input type="text" name="opcionC" id="id_input_c" value="">
	</div>
	<br>
		<div class="trans" style="display: flex; justify-content: center; margin: 10px;">
			<button id="id_button_enviar" class="btn btn-warning" type="submit" onclick="desaparece()" style="float: left">Enviar votación</button>
		</div>
		<div class="trans" style="display: flex; justify-content: center;">
			<a class="btn btn-outline-danger" href="{{ url('/logout') }}">Salir</a>
		</div>
</form>
@endif

<script src="js/manejoVotos.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>