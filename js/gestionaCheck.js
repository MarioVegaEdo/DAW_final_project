

var test = document.getElementById("test");
test.addEventListener("click", capturaCheks); 
window.onload = asignaCheks;
function asignaCheks(){

	let lista =  document.getElementById("caracteristicas").value;
	let listaCheck;
	let longitud = document.getElementsByClassName("check").length;
	listaCheck = lista.split("/");
	let listaCheckLong = listaCheck.length;
	for(var i = 0; i < longitud ; i++){
	
		for(var j = 0; j < listaCheckLong ; j++){
			
			if(listaCheck[j] == document.getElementsByClassName("check")[i].id){
				document.getElementsByClassName("check")[i].checked = 1;
		
			}
			
			
		}
		
	}
	
}


function capturaCheks(){

	var test = document.getElementById("test");
	test.addEventListener("click", capturaCheks); 
	let input;
	let cadena = "";
	let long = document.getElementsByClassName("check").length;// contar lso
																// check totales
	let caracteristicas = document.getElementById("caracteristicas");
	for(var i = 0; i < long ; i++){
		if(document.getElementsByClassName("check")[i].checked){
			input = document.getElementsByClassName("check")[i].id;
			cadena = cadena +'/' + input;
		}
	}
	

	document.getElementById("caracteristicas").value = cadena;

}