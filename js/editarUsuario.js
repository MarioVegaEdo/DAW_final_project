document.getElementById("Aocultar").style.display = "none";
document.getElementById("guardar").style.display = "none";
accion = document.getElementById("accion");
accion.addEventListener("click", ocultar);

document.getElementById("divCambioContrasenna").style.display = "none";
cambioContrasenna = document.getElementById("cambioContrasenna");
cambioContrasenna.addEventListener("click", cambioContrasennaOcultar);

function ocultar() {

	var ocultar = document.getElementById("Aocultar");
	if (ocultar.style.display == "none") {

		document.getElementById("Aocultar").style.display = "block";
		document.getElementById("guardar").style.display = "initial";
		habilitarInput();
		accion.innerHTML = "Cancelar";
		document.getElementById("botonera").className = "botonera2"
		document.getElementById("baja").style.display = "none";

	} else {

		document.getElementById("botonera").className = "botonera"
		document.getElementById("guardar").style.display = "none";
		document.getElementById("Aocultar").style.display = "none";
		deshabilitarInput();
		accion.innerHTML = "Editar";
		document.getElementById("baja").style.display = "initial";
		document.getElementById("accion").className = "boton"
	}

}

function habilitarInput() {

	var x = document.getElementsByTagName("input");
	for (var i = 0; i < x.length; i++) {

		x[i].disabled = false;
	}
}

function deshabilitarInput() {

	var x = document.getElementsByTagName("input");
	for (var i = 0; i < x.length; i++) {

		x[i].disabled = true;
	}
}

function cambioContrasennaOcultar() {
	var divCambioContrasenna = document.getElementById("divCambioContrasenna");
	if (divCambioContrasenna.style.display == "none") {
		document.getElementById("divCambioContrasenna").style.display = "block";

	} else {
		document.getElementById("divCambioContrasenna").style.display = "none";

	}

}
