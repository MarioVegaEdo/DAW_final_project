<?php
session_start();
?><html>
<head>
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HouseFinder.com</title>
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/csshtml.css">
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

<div class="flex-container">
  <div class="blanco box"></div>
  <div class="contenedor box informacion" >
  <div>
		<div>
			<h1>T&ecute;rminos y Condiciones generales</h1>
			<div>
				<p class="p">Ultima actualizaci&ocute;n:  1 de abril 2020</p>
			</div>
		</div>
		<div>
			<h1>I - Como Usuario, Usuario Registrado o Anunciante Particular que utiliza nuestra Web</h1>
			<div>
				<p class="p">En idealista somos responsables de tratar los datos personales que nos facilites a ra&icute;z de cualquier servicio que nos solicites.
La base legal para poder tratar tus datos es la relaci&ocute;n contractual que se crea cuando nos solicitas un servicio.
Te enviaremos comunicaciones comerciales cuando las hayas aceptado.
En caso de que hayas autorizado la cesi&ocute;n de tus datos o nos hayas solicitado un servicio prestado por otras empresas, estas necesitar&acute;n tener acceso a tus datos para poder prestarte el servicio.
Puedes en cualquier momento acceder, rectificar o suprimir tus datos, as&icute; como ejercitar otros derechos (te lo explicamos m&acute;s adelante).</p>
			</div>
		</div>
		<div>
			<h1>II - Como Anunciante Profesional (personas jur&icute;dicas o f&icute;sicas) o representante del mismo, que utiliza nuestra Web, Apps o nuestras herramientas para profesionales</h1>
			<div>
				<p class="p">En idealista somos responsables de tratar los datos personales que nos facilites para prestarte el servicio contratado contigo o con la entidad que representas
La base legal para tratar tus datos es el inter&ecute;s leg&icute;timo de idealista.
Tus datos podr&acute;n ser compartidos con prestadores de servicios de idealista que deban acceder a ellos para prestarte a ti o a la entidad a la que representas el servicio.
Puedes en cualquier momento acceder, rectificar o suprimir tus datos, as&icute; como ejercitar otros derechos (te lo explicamos m&acute;s adelante).</p>
			</div>
		</div>
		<div>
			<h1>Es importante que sepas</h1>
			<div>
				<p class="p">Siempre te recomendamos que leas esta pol&icute;tica de privacidad completa para poder conocer, en detalle, qu&ecute; datos utilizamos desde cada servicio que nos solicites y durante cu&acute;nto tiempo los necesitamos conservar.

Esta pol&icute;tica de privacidad podr&acute; ser modificada por decisi&ocute;n unilateral de idealista, te recomendamos que la consultes regularmente.

Al hacer click en el bot&ocute;n Ok, vamos para dentro, o equivalente, declaras conocer y entender la pol&icute;tica de privacidad de idealista.

Ahora nos metemos en harina con el texto legal, para que tengas la tranquilidad de saber todo lo que haremos (y lo que no) con tus datos. Puedes ir a por una buena taza de t&ecute;, zumo o caf&ecute; y pon tu m&uacute;sica preferida para que la lectura se te haga m&acute;s leve.</p>
			</div>
		</div>	
	</div>
  </div>
  <div class="blanco box"></div>  
</div>

	
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