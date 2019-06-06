
function gestionarVoto(votoSeleccionado){
	var contadorIntentos = false;
	switch(votoSeleccionado){
		case "a":
			if (document.getElementById('id_input_b').value || document.getElementById('id_input_c').value !== "" || contadorIntentos ==true) {
				
				alert("Sólo se puede elegir una opción");
			}else{
				document.getElementById('id_input_a').value = '1';
				document.getElementById('id_button_a').value = 'SELECCIONADO';
				contadorIntentos = true;
			}
		break;
		case "b":
			if (document.getElementById('id_input_a').value || document.getElementById('id_input_c').value !== "" || contadorIntentos ==true) {
				
				alert("Sólo se puede elegir una opción");
			}else{
				document.getElementById('id_input_b').value = '1';
				document.getElementById('id_button_b').value = 'SELECCIONADO';
				contadorIntentos = true;
			}
		break;
		case "c":
			if (document.getElementById('id_input_a').value || document.getElementById('id_input_b').value !== "" || contadorIntentos ==true) {
				alert("Sólo se puede elegir una opción");
			}else{
				document.getElementById('id_input_c').value = '1';
				document.getElementById('id_button_c').value = 'SELECCIONADO';
				contadorIntentos = true;
			}
		break;
	}
}

function desaparece(){
	document.getElementById('id_button_enviar').hidden;
}