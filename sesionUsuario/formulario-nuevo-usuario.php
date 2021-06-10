<?php
require_once "../utilidades/Utilidades.php";

session_start();

if (isset($_SESSION["sesionIniciada"])) {
    Utilidades::redireccionar("../vivienda-listado.php");
}
?>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport"
	content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>HouseFinder.com</title>
<link rel="stylesheet"
	href="../bootstrap-4.3.1-dist/css/bootstrap.min.css">
<link rel="stylesheet"
	href="../bootstrap-4.3.1-dist/cssClases/formulario-nuevo-usuario.css">
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
<link rel="stylesheet"
	href="../bootstrap-4.3.1-dist/cssClases/headerCSS.css">
<link rel="stylesheet"
	href="../bootstrap-4.3.1-dist/cssClases/footerCss.css">
<link rel="stylesheet"
	href="../bootstrap-4.3.1-dist/cssClases/comunesCss.css">
<script src="../bootstrap-4.3.1-dist/jquery-3.4.1.min.js"></script>
<script src="../bootstrap-4.3.1-dist/popper.min.js"></script>
<script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
</head>
<body>

	<header>
		<div class="contenedorHeader">
			<div class="contenedorImagenHeader">
				<a href="../vivienda-listado.php"> <img class="imagenHeader"
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
							<p class="textoSesionIiciada">CERRAR SESI&Oacute;N</p>
						</a>
					</div>

				</div>
    	 <?php
} else {
    ?>	
          <a href="formulario-inicio-sesion.php">
					<div class="contenedorSinSesion">
						<img class="imagenAccesoUsuarios"
							src="/uploads/multimedia/sesion.png" alt="Acceso a usuario">
						<p class="textoAccesoUsuarios">Acceso a usuarios</p>
					</div>
				</a>
		 <?php
}
?>

	
	
	
	
	
	</header>
<?php
if (isset($_REQUEST["incorrecto"])) {
    echo ' <div class="alert alert-danger alert-formato-danger" role="alert"> El email ya ha sido registrado en la web.
    </div>';
}
if (isset($_REQUEST["errorContrasenna"])) {
    echo ' <div class="alert alert-danger alert-formato-danger" role="alert"> Las contrase&ntilde;as no coinciden.
    </div>';
}

?>
	<h1 class="cabecera">Formulario de Registro de usuario</h1>
	<div class="contenedorFormulario ">
		<form action="../usuario-annadir.php" method="POST">
			<div class="form-group">
				<label class="label-primera">correo electronico: </label> <input
					placeholder="Mail@mail.com" type="email" name="mail" required />
			</div>
			<div class="form-group">
				<label>nombre: </label> <input type="text" placeholder="Tu nombre"
					name="nombre" required />
			</div>
			<div class="form-group">
				<label>apellido1: </label> <input type="text"
					placeholder="Primer apellido" name="apellido1" required />
			</div>
			<div class="form-group">
				<label>apellido2: </label> <input type="text"
					placeholder="Segundo apellido" name="apellido2" />
			</div>
			<div class="form-group">
				<label>telefono1: </label> <input type="text"
					placeholder="6xxxxxxxx" pattern="[0-9]{9}" name="telefono1" />
			</div>
			<div class="form-group">
				<label>telefono2: </label> <input type="text"
					placeholder="9xxxxxxxx" pattern="[0-9]{9}" name="telefono2" />
			</div>
			<div class="form-group">
				<label>contrase&Ntilde;a: </label> <input class="posicionInput"
					type="password" name="contrasenna1" required />
			</div>
			<div class="form-group">
				<label>confirmar contrase&Ntilde;a: </label> <input
					class="posicionInput" type="password" name="contrasenna2" required />
			</div>
			<input class="boton posicionBoton" type="submit"
				value="Reg&iacute;strame">
		</form>
	</div>

	<div class="contenedorFooter flexfooter">
		<div class="flexbox separador1"></div>
		<div class="flexbox central">
			<h1 class="tituloFooter">SOBRE NOSOTROS</h1>
			<p>
				<a class="link" href="../quienesSomos.php">Quienes somos</a>
			</p>
			<p>
				<a class="link" href="../pPrivacidad.php">Pol&iacute;tica de privacidad</a>
			</p>
			<p>
				<a class="link" href="../pCookies.php">Pol&iacute;tica de Cookies</a>
			</p>
			<p>
				<a class="link" href="../terminosYcondiciones.php">T&eacute;rminos y
					Condiciones</a>
			</p>
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

			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d761.4194165943285!2d-3.7644308707987286!3d40.23846852246083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd41f537e265491f%3A0x5471f60dc0a7d22a!2sCalle%20Santo%20Tom%C3%A1s%20de%20Aquino%2C%2027%2C%2028982%20Parla%2C%20Madrid!5e0!3m2!1ses!2ses!4v1591633288569!5m2!1ses!2ses"
				width="200" height="200" frameborder="0" style="border: 0;"
				allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			<p class="textoFooter">Calle Santo Tom&aacute;s de Aquino 27</p>
			<p class="textoFooter">Parla Madrid</p>
		</div>
		<div class="flexbox separador2"></div>
	</div>
</body>

</html>
