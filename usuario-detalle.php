<?php

require_once "clases/Usuario.php";

require_once "dao/usuarioDao.php";

require_once "dao/direccionDao.php";

require_once "dao/viviendaDao.php";

require_once "utilidades/Utilidades.php";

session_start();

if (isset($_SESSION["sesionIniciada"])) {
    $id = $_SESSION["id"];
    $usuario = usuarioDao::usuarioObtenerPorId($id);
    echo $id;
    $viviendas = viviendaDao::viviendaObtenerPorIdUsuario($id);
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
   <script src="js/paginador.js"></script>

<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
<script src="bootstrap-4.3.1-dist/jquery-3.4.1.min.js"></script>
<script src="bootstrap-4.3.1-dist/popper.min.js"></script>
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/usuario-detalle.css">
<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/headerCSS.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/footerCss.css">
<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/comunesCss.css">
		<link rel="stylesheet"
	href="bootstrap-4.3.1-dist/cssClases/paginadorCss.css">
<script src="../bootstrap-4.3.1-dist/jquery-3.4.1.min.js"></script>
<script src="../bootstrap-4.3.1-dist/popper.min.js"></script>
<script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
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
if (isset($_REQUEST["correcto"])) {
    echo ' <div class="alert alert-success alert-formato-success" role="alert"> &Eacute;xito en la operaci&oacute;n.
    </div>';
}
if (isset($_REQUEST["incorrecto"])) {
    echo ' <div class="alert alert-danger alert-formato-danger" role="alert"> Las contrase&ntilde;as no coinciden.
    </div>';
}
if (isset($_REQUEST["noCoincide"])) {
    echo ' <div class="alert alert-danger alert-formato-danger" role="alert"> No le pertenece esa vivienda.
    </div>';
}

?>

<h1 class="titulo">Datos del usuario</h1>
<div class="contenedorFormulario">

<form action="usuario-actualizar.php" method="POST">

	<div class="form-group">
		<label class="label-primera">correo electronico: </label>
		<input name="mail" type="email" value="<?=$usuario->getEmail()?>" required disabled>
	</div>
	<div class="form-group">
		<label>nombre: </label>
		<input name="nombre" type="text" value="<?=$usuario->getNombre()?>"required disabled>
	</div>
	<div class="form-group">
		<label>apellido1: </label>
		<input name="apellido1" type="text" value="<?=$usuario->getApellido1()?>"required disabled>
	</div>
	<div class="form-group">
		<label>apellido2: </label>
		<input name="apellido2" type="text" value="<?=$usuario->getApellido2()?>" disabled>
	</div>
	<div class="form-group">
		<label>telefono1:</label>
		<input name="telefono1" type="text" pattern="[0-9]{9}" value="<?=$usuario->getTelefono1()?>" disabled>
	</div>
	<div class="form-group">
		<label>telefono2: </label>
		<input name="telefono2" type="text" pattern="[0-9]{9}" value="<?=$usuario->getTelefono2()?>" disabled>
	</div>
	
	<div id="Aocultar">
	<div class="form-group">
		<label>contrase&ntilde;a actual: </label>
		<input name="contrasenna1" type="password" required disabled>
	</div>
	<p id="cambioContrasenna">Cambiar contrase&ntilde;a</p>
	
	
	
	
	<div id="divCambioContrasenna">
	<div class="form-group">	
		<label>Nueva contrase&ntilde;a: </label>
		<input name="contrasenna2" type="password">
	</div>
	<div class="form-group">	
		<label>Confirmar contrase&ntilde;a: </label>
		<input name="contrasenna3" type="password">
	</div>
	</div>
	</div>
	
	<div id="botonera" class="botonera">
	<input class="boton" type="submit" id="guardar" value="Guardar cambios"/>
	<button class="boton" type="button"  id="accion">Editar</button>
	<a  id="baja" class="boton botonfalso" type="button" href="usuario-baja.php" >Baja</a>
	</div>
	</form>
</div>





<h1 class="titulo" >Vivendas a cargo</h1>
<div class="contenedorTabla">
<table class="table table-striped thead-dark table-bordered" id="tblDatos" >

    <tr>

        <th  >DIRECCION</th>
        <th >PRECIO</th>
        <th >SUPERFICIE</th>
        <th >EDITAR</th>
        <th >ELIMINAR</th>
    </tr>

    <?php 
    if($viviendas == null){
        echo '<div class="alert alert-danger " role="alert"> No hay inmuebles registrados para este usuario.
    </div>';
        
    }else{
    
    foreach ($viviendas as $vivienda) { ?>
        <tr>

            <td class="col-2">
                <p >
                 <?php
                 $idViv = $vivienda->getIdDireccion();
                 $direccion = direccionDao::direccionObtenerPorId($idViv);
                  ?>
                    <?=$direccion->getMunicipio()?>
                   ( <?=$direccion->getProvincia()?> )
                    <?=$direccion->getTipoVia()?>
                    <?=$direccion->getNombreVia()?>
                    <?=$direccion->getNumero()?>
                    <?=$direccion->getPiso()?>
                    <?=$direccion->getLetra()?>
                </p>
            </td>
             <td class="col">
                <p ><?=$vivienda->getPrecio()?></p>
            </td >
             <td class="col">
                <p ><?=$vivienda->getSuperficie()?></p>
            </td>
            <td class="col">
            <a href='vivienda-formulario-modificar.php?id=<?=$vivienda->getIdVivienda()?>'>
            <img class="imgTabla" src="/uploads/multimedia/actualizar.png" alt="ModificarVivienda">
            </a>
            </td>
            <td class="col"> 
             <a href='vivienda-baja.php?id=<?=$vivienda->getIdVivienda()?>'>
            <img class="imgTabla" src="/uploads/multimedia/eliminar.png" alt="EliminarVivienda">
           </a>
            </td>
        </tr>
    <?php }
    }?>

</table>
<a href='vivienda-formulario-registro.php' class="boton botAdd">A&ntilde;adir vivienda</a>
	</div>
<script src="js/editarUsuario.js"></script>


<div id="paginador" class="paginador2"></div>
<script type="text/javascript">
var p = new Paginador(
    document.getElementById('paginador'),
    document.getElementById('tblDatos'),
    4
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