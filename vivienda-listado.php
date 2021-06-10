<?php
require_once "clases/Vivienda.php";

require_once "clases/Direccion.php";

require_once "dao/viviendaDao.php";

require_once "dao/direccionDao.php";

require_once "utilidades/Utilidades.php";

require_once "sesionUsuario/comprobar-sesion.php";


if (isset($_REQUEST["busqueda"])) {

    $superficie = $_REQUEST["superficie"];
    $bannos = $_REQUEST["bannos"];
    $tipo = $_REQUEST["tipo"];
    $anno = $_REQUEST["anno"];
    $estado = $_REQUEST["estado"];
    $habitaciones = $_REQUEST["habitaciones"];
    $planta = $_REQUEST["planta"];
    $precio1 = $_REQUEST["precio1"];
    $precio2 = $_REQUEST["precio2"];
    $dirDato = $_REQUEST["dirDato"];
    $opcionDir = $_REQUEST["opcionDir"];

    $camposBusqueda = Utilidades::generaQuery($opcionDir, $dirDato, $superficie, $bannos, $tipo,$anno, $estado, $habitaciones, $planta, $precio1, $precio2);
   
    echo $camposBusqueda;
    $viviendas = viviendaDao::listarViviendasPorCampos($camposBusqueda);
} else {

    $viviendas = viviendaDao::listarViviendas();
}

?>



<html lang="es">

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
	href="bootstrap-4.3.1-dist/cssClases/paginadorCss.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/comunesCss.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/vivienda-listado.css">
<link rel="stylesheet" href="bootstrap-4.3.1-dist/miCss.css">
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
<?php
if (isset($_REQUEST["error"])) {
    echo ' <div class="alert alert-danger alert-formato-danger" role="alert"> Ha insertado la opci&oacute;n equivocada CP/Municipio.
    </div>';
}

?>
	<div class="flex-container">
		<div class="blanco"></div>

		<div class="contenedorFormularioListado">

			<div class="tituloFormulario">
				<p>B&uacute;squeda avanzada</p>
			</div>
			<form class="FormularioListado"
				action="vivienda-listado.php?busqueda=true" method="POST">

				<div class="form-group">
					<input type="radio" id="cp" name="opcionDir" value="cp" required> <label
						for="male">COD. POSTAL</label> <input type="radio" id="mun"
						name="opcionDir" value="mun"> <label for="female">MUNICIPIO</label>
					<label class="label">COD. POSTAL/MUNICIPIO: </label><input class="form-control"
						name="dirDato" required>
				</div>



				<div class="form-group">
					<label>TIPO: </label> <select class="form-control" name="tipo">
						<option></option>
						<option value="piso">Piso</option>
						<option value="chalet">Chalet</option>
						<option value="atico">&Aacute;tico</option>
					</select>
				</div>
				<div class="form-group">
					<label>SUPERFICIE: </label> <input class="form-control" min="20"
						max="1000" type="number" size="4" type="number" name="superficie">
				</div>
				<div class="form-group">
					<label>A&Ntilde;O CONSTRUCCION : </label> <input class="form-control"
						min="1900" max="3000" type="number" name="anno">
				</div>
				<div class="form-group">
					<label>HABITACIONES: </label> <select class="form-control"
						name="habitaciones">
						<option></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3+</option>
					</select>
				</div>
				<div class="form-group">
					<label>BA&Ntilde;OS: </label> <select class="form-control" name="bannos">
						<option></option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3+</option>
					</select>
				</div>
				<div class="form-group">
					<label>ESTADO: </label> <select class="form-control" name="estado">
						<option></option>
						<option value="ObraNueva">Obra nueva</option>
						<option value="BuenEstado">Buen Estado</option>
						<option value="Reforma">A reformar</option>
					</select>
				</div>
				<div class="form-group">
					<label>PLANTA: </label> <select class="form-control" name="planta">
						<option></option>
						<option value="Ultima">&Uacute;ltima planta</option>
						<option value="Intermedia">Planta intermedia</option>
						<option value="Baja">Planta baja</option>
					</select>
				</div>

				<div class="form-group">
					<label>PRECIO MIN: </label><input class="form-control" size="8"
						min="100" type="number" name="precio1"> <label>PRECIO MAX: </label><input
						class="form-control" size="8" min="100" type="number"
						name="precio2">
				</div>
				<input class="boton botontamano" type="submit" value="Buscar">
			</form>

		</div>





		<div class="contenedorTablaListado">
			<table id="tblDatos" class="thead-dark table table-striped tabla">
				<tr class="th">
					<p class="tituloTabla">Listado de vivendas</p>
				</tr>
    <?php 
    
    if ($viviendas == null) {
        echo '<div class="alert alert-danger " role="alert"> No hay inmuebles registrados con esas caracter&iacute;sticas.
    </div>';
    }else {foreach ($viviendas as $vivienda) { ?>
  	
        <tr>

					<td class="contenedorimagenListado"><a
						href='vivienda-detalle.php?id=<?=$vivienda->getIdVivienda()?>'> <img
							class="imagenListado" src="/uploads/<?=$vivienda->getPortada()?>"
							alt="imagen">
					</a></td>


					<td>
						<div>
							<a href='vivienda-detalle.php?id=<?=$vivienda->getIdVivienda()?>'>
								<p class="encabezado">DIRECCI&Oacute;N:</p>
								<p class="dato">
				<?php
        $idViv = $vivienda->getIdDireccion();
        $direccion = direccionDao::direccionObtenerPorId($idViv);
        ?>			 
				
								
								<p> <?=$direccion->getMunicipio()?>
                   ( <?=$direccion->getProvincia()?> )</p>
                    <?=$direccion->getTipoVia()?>
                    <?=$direccion->getNombreVia()?>
                    <?=$direccion->getNumero()?>
                    <?=$direccion->getPiso()?>
                    <?=$direccion->getLetra()?>
                   
				</p>
								<p class="encabezado">PRECIO:</p>
								<p class="dato"> <?=$vivienda->getPrecio()?> &euro;	| (<?=$vivienda->getOperacion()?>)</p>
								<p> hab. <?=$vivienda->getHabitaciones()?> | <?=$vivienda->getSuperficie()?> m<sup>2</sup> | Planta: <?=$vivienda->getPlanta()?></p>
								<!-- 			<p><?=$vivienda->getDescripcion()?></p> -->

							</a>
						</div>
					</td>


				</tr>
		
    <?php }
    }?>

</table>
			
		</div>

		<div class="blanco"></div>
	</div>


<div id="paginador" class="paginador"></div>

	<script src="js/paginador.js"></script>
	<script type="text/javascript">
var p = new Paginador(
    document.getElementById('paginador'),
    document.getElementById('tblDatos'),
    10
);
p.Mostrar();
</script>

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