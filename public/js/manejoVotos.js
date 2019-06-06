
function gestionarVoto(votoSeleccionado){
	switch(votoSeleccionado){
		case "a":
			if (document.getElementById('id_input_b').value || document.getElementById('id_input_c').value !== "") {
				
				alert("Sólo se puede elegir una opción");
			}else{
				document.getElementById('id_input_a').value = '1';
				document.getElementById('id_button_a').value = 'SELECCIONADO';
			}
		break;
		case "b":
			if (document.getElementById('id_input_a').value || document.getElementById('id_input_c').value !== "") {
				
				alert("Sólo se puede elegir una opción");
			}else{
				document.getElementById('id_input_b').value = '1';
				document.getElementById('id_button_b').value = 'SELECCIONADO';
			}
		break;
		case "c":
			if (document.getElementById('id_input_a').value || document.getElementById('id_input_b').value !== "") {
				alert("Sólo se puede elegir una opción");
			}else{
				document.getElementById('id_input_c').value = '1';
				document.getElementById('id_button_c').value = 'SELECCIONADO';
			}
		break;
	}
}

function desaparece(){
	document.getElementById('id_button_enviar').hidden;
}