<?php
session_start();
require_once "dao/viviendaDao.php";
require_once "dao/usuarioDao.php";
require_once "clases/Direccion.php";

require_once "dao/direccionDao.php";
$id = $_REQUEST["id"];

$vivienda = viviendaDao::viviendaObtenerPorId($id);
$idUsuario = $vivienda->getIdUsuario();
$usuario = usuarioDao::usuarioObtenerPorId($idUsuario);
?>


<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HouseFinder.com</title>
<meta name="viewport"
	content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/headerCSS.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/footerCss.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/comunesCss.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/vivienda-detalle.css">
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
	<div class="flex-container">
		<div class="blanco"></div>
		<div class="contenedorDatosVivienda">

			<div class="contenedorImagen">				
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/uploads/<?=$vivienda->getPortada()?>" class="d-block w-100 imagenVivienda" alt="...">
    </div>
    <?php 
    $imagenes = $vivienda->getImagenes();
   
    $imagenesArray = explode("|", $imagenes);
    for($i=1; $i < count($imagenesArray) ;$i++){
        ?>
    <div class="carousel-item">
      <img src="/uploads/<?=$imagenesArray[$i]?>" class="d-block w-100 imagenVivienda" alt="...">
      </div>
         <?php
    }
    
    
    ?>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
					
			</div>
			<div>
				<p class="encabezado">DIRECCION:</p>
				<?php 
				$idViv =$vivienda->getIdDireccion();
				$direccion = direccionDao::direccionObtenerPorId($idViv);
				?>		
				<p class="dato"> <?=$direccion->getMunicipio()?>
                   ( <?=$direccion->getProvincia()?> )
                  <?=$direccion->getTipoVia()?>
                    <?=$direccion->getNombreVia()?>
                    <?=$direccion->getNumero()?>
                    <?=$direccion->getPiso()?>
                    <?=$direccion->getLetra()?>
                   
				</p>
				
				<p class="encabezado">PRECIO: <?=$vivienda->getPrecio()?>  &euro; | (<?=$vivienda->getOperacion()?>)</p>
				<p class="dato">TIPO: <?=$vivienda->getTipo()?> | ESTADO: <?=$vivienda->getEstado()?> | A&Ntilde;O CONSTRUCCI&Oacute;N: <?=$vivienda->getConstruida()?></p>
				
				<p class="dato">SUPERFICIE: <?=$vivienda->getSuperficie()?> | HABITACIONES: <?=$vivienda->getHabitaciones()?> | BA&Ntilde;OS  <?=$vivienda->getBannos()?> | PLANTA: <?=$vivienda->getPlanta()?></p>
								
				
				<div >
					<p class="encabezado">CARACTER&Iacute;STICAS:</p>
					<p class="dato"> 				
					<?php 
					$caracteristicas = $vivienda->getCaracteristicas();
					$listaCa = explode("/",$caracteristicas);
					$longArray = count($listaCa);
					for($i = 1; $i < $longArray ;$i++){
					    
					    echo $listaCa[$i].'  ';
					    
					    if($i == 5){// nºMáx de características/2
					        echo "</br>";
					        
					    }
					    
					}
					    ?>
</p>
				</div>
			</div>
			<div>
				<p class="encabezado">DESCRIPCION: </p>
				<p class="dato"><?=$vivienda->getDescripcion()?></p>
			</div>

		</div>
		
		<div class="contenedorDatosVendedor">
<div class="datosVendedorTitulo">
		<p>DATOS DEL VENDEDOR</p>
		</div>
			<div class="contenedorDatosVendedor2">
				<p class="encabezado">NOMBRE:</p>
				<p class="dato"><?=$usuario->getNombre()?> <?=$usuario->getApellido1()?> <?=$usuario->getApellido2()?></p>
				<p class="encabezado">EMAIL DE CONTACTO:</p>
				<p class="dato"><?=$usuario->getEmail()?></p>
			<?php
if ($usuario->getTelefono1() != null) {
    ?>
					<p class="encabezado">TELEFONOS DE CONTACTO:</p>
				<p class="dato"><?=$usuario->getTelefono1()?> - <?=$usuario->getTelefono2()?></p>
			  
			    <?php
}
?>
			
			
		</div>
		</div>
		<div class="blanco"></div>
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