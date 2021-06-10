<?php

require_once "dao/viviendaDao.php";
require_once "dao/direccionDao.php";

$id = $_REQUEST["id"];
session_start();

if (isset($_SESSION["sesionIniciada"])) {
    $vivienda = viviendaDao::viviendaObtenerPorId($id);
    $idDireccion = $vivienda->getIdDireccion();
    $direccion = direccionDao::direccionObtenerPorId($idDireccion);
}else{
    
    
    Utilidades::redireccionar("vivienda-listado.php");
}




?>

<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HouseFinder.com</title>
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/headerCSS.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/footerCss.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/comunesCss.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/vivienda-formulario-modificar.css">

<script src="bootstrap-4.3.1-dist/jquery-3.4.1.min.js"></script>
<script src="bootstrap-4.3.1-dist/popper.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>

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
							<p class="textoSesionIiciada">CERRAR SESI&Oacute;N</p>
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

	</header>


		
	
	<div class="contenedorPrincipal">
	<form class="formularioRegistro" action="vivienda-actualizar.php" method="POST" enctype="multipart/form-data">
	
	
		
		
		
		
		<div class="contenedorFormularioLocalizacion">
		<h1  class="tituloFormulario">Datos de la localizacion</h1>
				<div class="form-group">
					<label>PROVINCIA: </label><input type="text" name="provincia" value="<?=$direccion->getProvincia()?>" required> <label>MUNICIPIO:
					</label><input type="text" name="municipio" value="<?=$direccion->getMunicipio()?>" required> <label>C&Oacute;DIGO POSTAL:
					</label><input type="number" pattern="[0-9]{5}" size="5" name="cp" value="<?=$direccion->getCp()?>" required>
				</div>
				<div class="form-group">
					<label>TIPO V&Iacute;A: </label><select name="tipoVia" required>
					<option  value="<?=$direccion->getTipoVia()?>"><?=$direccion->getTipoVia()?></option>
						<option value="calle">Calle</option>
						<option value="plaza">Plaza</option>
						<option value="travesia">Traves&iacute;a</option>
						<option value="avenida">Avenida</option>
					</select> <label>NOMBRE V&Iacute;A: </label><input type="text" required
						name="nombrevia"  value="<?=$direccion->getNombreVia()?>"> <label>N&Uacute;MERO: </label><input type="text"
						type="number" name="numero"  size="4"  value="<?=$direccion->getNumero()?>"> <label>PISO: </label><input value="<?=$direccion->getPiso()?>"
						type="text" type="number" name="piso"  size="4"> <label>LETRA: </label><input value="<?=$direccion->getLetra()?>" size="2"
						type="text" name="letra"  size="4">
				</div>
			</div>
		
			<div class="contenedorFormularioVivienda">
				<h1 class="tituloFormulario">Datos de la vivienda</h1>

				<div class="form-group">

					<label>OPERACI&Oacute;N: </label> <select name="operacion" required>
					<option value="<?=$vivienda->getOperacion()?>"><?=$vivienda->getOperacion()?></option>
						<option value="venta">Venta</option>
						<option value="alquiler">Alquiler</option>
					</select> <label>TIPO: </label> <select name="tipo" required>
					<option value="<?=$vivienda->getTipo()?>"><?=$vivienda->getTipo()?></option>
						<option value="piso">Piso</option>
						<option value="chalet">Chalet</option>
						<option value="atico">&Aacute;tico</option>
					</select> <label>PRECIO: </label><input required type="number" size="8" name="precio" value="<?=$vivienda->getPrecio()?>">


					<label>ESTADO: </label> <select name="estado" required >
							<option value="<?=$vivienda->getEstado()?>"><?=$vivienda->getEstado()?></option>
						<option value="ObraNueva">Obra nueva</option>
						<option value="BuenEstado">Buen Estado</option>
						<option value="Reforma">A reformar</option>
					</select>


</div>
				</div>
				<div class="form-group">
					<label>A&Ntilde;O CONSTRUCCION : </label><input type="number" min="1900" max="3000" name="anno" value="<?=$vivienda->getConstruida()?>">

					<label>SUPERFICIE(m<sup>2</sup>): </label><input required min="20" max="10000" type="number" size="4" value="<?=$vivienda->getSuperficie()?>"
						name="superficie"> <label>HABITACIONES: </label> <select
						name="habitaciones" required>
						<option value="<?=$vivienda->getHabitaciones()?>"><?=$vivienda->getHabitaciones()?></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3+</option>
					</select> <label>BA&Ntilde;OS: </label> <select name="bannos" required>
					<option value="<?=$vivienda->getBannos()?>"><?=$vivienda->getBannos()?></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3+</option>
					</select> <label>PLANTA: </label> <select name="planta" required>
						<option value="<?=$vivienda->getPlanta()?>"><?=$vivienda->getPlanta()?></option>
						<option value="Ultima">&Uacute;ltima planta</option>
						<option value="Intermedia">Planta intermedia</option>
						<option value="Baja">Planta baja</option>
					</select>





				</div>
				
				<div class="form-group">
					<label>CARACTER&Iacute;STICAS: </label>
					<table class="table table-borderless tabla">
						<tr>
							<td><input type="checkbox" class="check" name="Aireacondicionado"
								id="Aireacondicionado" value="Aireacondicionado"> <label
								for="Aireacondicionado"> Aire acondicionado</label><br></td>
							<td><input class="check" type="checkbox" id="Ascensor"
								name="Ascensor" value="Ascensor"> <label for="Ascensor">
									Ascensor</label><br></td>
							<td><input type="checkbox" name="Calefaccion" class="check"
								id="Calefaccion" value="Calefaccion"> <label for="Calefaccion">
									Calefacci&oacute;n</label><br></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="Piscina" class="check"
								id="Piscina" value="Piscina"> <label for="Piscina"> Piscina</label><br>
							</td>
							<td><input type="checkbox" class="check" name="Terraza"
								id="Terraza" value="Terraza"> <label for="Terraza"> Terraza</label><br>
							</td>
							<td><input type="checkbox" class="check" name="Trastero"
								id="Trastero" value="Trastero"> <label for="Trastero"> Trastero</label><br>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" class="check" name="Jardin"
								id="Jardin" value="Jardin"> <label for="Jardin"> Jard&iacute;n</label><br>
							</td>
							<td><input type="checkbox" class="check" name="Amueblado"
								id="Amueblado" value="Amueblado"> <label for="Amueblado">
									Amueblado</label><br></td>
							<td><input type="checkbox" class="check" name="ZComunitaria"
								id="ZComunitaria" value="ZComunitaria"> <label
								for="ZComunitaria"> Z. Comunitaria</label><br></td>
						</tr>
						<tr>
							<td><input type="checkbox" class="check" name="CocinaEquipada"
								id="CocinaEquipada" value="CocinaEquipada"> <label
								for="CocinaEquipada"> Cocina equipada</label><br></td>
							<td>
							
						</tr>

					</table>


			

				</div>
				<div class="form-group">


<div class="form-group col-lg-6">

<label>DESCRIPCI&Oacute;N: </label></br>
<textarea required name="descripcion" rows="10" cols="100"><?=$vivienda->getDescripcion()?></textarea>
</div>

					<div class="form-group">
					
					
					<img class="imagenPortada" src="/uploads/<?=$vivienda->getPortada()?>" alt="imagen">
			
								<label>PORTADA: </label><input type="file" size="20" name="portada" >
					</div>
				
				
					<div class="form-group">
					
					<label>Im&aacute;genes del inmueble</label>
					 <input type="file" name="imgs[]" multiple>
					</div>
	
		<input type="hidden" name="portadaAnt" value="<?=$vivienda->getPortada()?>" >
		<input type="hidden" name="imgsAnt" value="<?=$vivienda->getImagenes()?>" >
		<input type="hidden" name="caracteristicas" id="caracteristicas" value="<?=$vivienda->getCaracteristicas()?>">
		<input type="hidden" name="idDireccion" id="idDireccion" value="<?=$vivienda->getIdDireccion()?>">
   		<input type="hidden" name="id"  value="<?=$vivienda->getIdVivienda()?>">
    <div class="botonera">
		<input class="boton" type="submit" value="registrar" id="test" >
		</div>
		</div>
	</form>
</div>

<script src="js/gestionaCheck.js"></script>

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
