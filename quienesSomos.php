<?php
session_start();
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport"
	content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>HouseFinder.com</title>
<link rel="stylesheet" href="bootstrap-4.3.1-dist/cssClases/csshtml.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/headerCSS.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/footerCss.css">
<link rel="stylesheet"
	href="../bootstrap-4.3.1-dist/cssClases/comunesCss.css">
</head>
<body>

	<header>
		<div class="contenedorHeader">
			<div class="contenedorImagenHeader">
				<a href="vivienda-listado.php"> <img class="imagenHeader"
					src="/uploads/multimedia/logo.png" alt="logo Housefinder">
				</a>
			</div>
			<div class="contenedorPanelHeader">
		<?php
if (isset($_SESSION["nombre"])) {
    ?>
    		<div class="contenedorSesionIiciada">
					<div class="contenedorMiPanel">
						<a href="usuario-detalle.php"> <img class="imagenMiPanel"
							src="/uploads/multimedia/miPerfil.png" alt="MI PERFIL">
							<p class="textoSesionIiciada"><?= $_SESSION["nombre"] ?></p>
						</a>

					</div>
					<div class="contenedorAjustes">
						<a href="sesionUsuario/cerrar-sesion.php"> <img
							class="imagenAjustes" src="/uploads/multimedia/ajustes.png"
							alt="CERRAR SESION">
							<p class="textoSesionIiciada">CERRAR SESION</p>
						</a>
					</div>

				</div>
    	 <?php
} else {
    ?>	
          <a href="sesionUsuario/formulario-inicio-sesion.php">
					<div class="contenedorSinSesion">
						<img class="imagenAccesoUsuarios"
							src="/uploads/multimedia/sesion.png" alt="Acceso a usuario">
						<p class="textoAccesoUsuarios">Acceso a usuarios</p>
					</div>
				</a>
		 <?php
}
?>
          
<!-- 		</div> -->
				<!-- 			<a class="volver" href="vivienda-listado.php"> &lt;volver al listado</a> -->
				<!-- 		</div> -->
	
	</header>


	<div class="blanco box"></div>
	<div class="contenedor box informacion">
<table class="table tabla">

	<tr>
	<td><img class="imgempleado" src="/uploads/multimedia/emp1.jpg">
		<p class="infoEmp">Delia Espin</p>
		<p class="infoEmp2">Chief Executive </p>
	</td>
	<td><img class="imgempleado" src="/uploads/multimedia/emp1.jpg">
	<p class="infoEmp">Sagrario Ribera</p>
		<p class="infoEmp2">Chief Operating </p>
		</td>
	<td><img class="imgempleado" src="/uploads/multimedia/emp1.jpg">
	<p class="infoEmp">Marti Rincon</p>
		<p class="infoEmp2">Chief Marketing 
</p>
		</td>
	<td><img class="imgempleado" src="/uploads/multimedia/emp1.jpg">
	<p class="infoEmp">Eva Arnaiz</p>
		<p class="infoEmp2">Chief Financial 
</p></td>
	</tr>
	<tr>
	<td><img class="imgempleado" src="/uploads/multimedia/emp1.jpg">
	<p class="infoEmp">Francisco Baeza</p>
		<p class="infoEmp2">Chief Information 
</p></td>
	<td><img class="imgempleado" src="/uploads/multimedia/emp1.jpg">
	<p class="infoEmp">Samuel Mota</p>
		<p class="infoEmp2">Chief Technology 
</p></td>
	<td><img class="imgempleado" src="/uploads/multimedia/emp1.jpg">
	<p class="infoEmp">Valeria Almagro</p>
		<p class="infoEmp2">Chief Communications 
</p></td>
	<td><img class="imgempleado" src="/uploads/multimedia/emp1.jpg">
	<p class="infoEmp">Xavier Tamayo</p>
		<p class="infoEmp2">Chief Diversity </p></td>
	</tr>
</table>
		
			<div>
	
	<p class="p2">
	Datos sociales de idealista
Registro Mercantil
Idealista S.A.U. FIN A-82505660
Registro Mercantil de Madrid tomo 15.111, libro 0, folio 60, secci�n 8, hoja m-252416
	</p>
	</div> 
	</div>
	<div class="blanco box"></div>




	<div class="contenedorFooter flexfooter">
		<div class="flexbox separador1"></div>
		<div class="flexbox central">
			<h1 class="tituloFooter">SOBRE NOSOTROS</h1>
			<p><a class="link" href="quienesSomos.php">Quienes somos</a></p>
			<p><a class="link" href="pPrivacidad.php">Pol&iacute;tica de privacidad</a></p>
			<p><a class="link" href="pCookies.php">Pol&iacute;tica de Cookies</a></p>
			<p><a class="link" href="terminosYcondiciones.php">T&eacute;rminos y Condiciones</a></p>
		</div>
		<div class="flexbox central">
			<h1 class="tituloFooter">CONTACTO</h1>
			<p class="textoFooter">E-MAIL: cine@cinma.com</p>
  			<p class="textoFooter">TLF: 91 000 00 00</p>
  			<p class="textoFooter">HORARIOS:</p>
 			<p class="textoFooter">L-J: 9:30 a 20:00</p>
 			<p class="textoFooter">S&Aacute;BADOS: 10:00h a 14:00h</p>
		</div>

		<div class="flexbox central">
			<h1 class="tituloFooter">DONDE ESTAMOS</h1>
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.4194165943285!2d-3.7644308707987286!3d40.23846852246083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd41f537e265491f%3A0x5471f60dc0a7d22a!2sCalle%20Santo%20Tom%C3%A1s%20de%20Aquino%2C%2027%2C%2028982%20Parla%2C%20Madrid!5e0!3m2!1ses!2ses!4v1591633288569!5m2!1ses!2ses" width="200" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			  			<p class="textoFooter">Calle Santo Tom&aacute;s de Aquino 27</p>
  			<p class="textoFooter">Parla Madrid</p>
		</div>
		<div class="flexbox separador2"></div>
	</div>
</body>
</html>