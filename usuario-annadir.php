 <?php
require_once "dao/usuarioDao.php";
require_once "utilidades/Utilidades.php";
session_start();

$nombre = $_REQUEST["nombre"];
$email = $_REQUEST["mail"];
$telefono1 = $_REQUEST["telefono1"];
$telefono2 = $_REQUEST["telefono2"];
$apellido1 = $_REQUEST["apellido1"];
$apellido2 = $_REQUEST["apellido2"];
$contrasenna1 = $_REQUEST["contrasenna1"];
$contrasenna2 = $_REQUEST["contrasenna2"];


$usuario = usuarioDao::usuarioObtenerPorEmail($email);

if($usuario->getEmail() != null){
    
     Utilidades::redireccionar("sesionUsuario/formulario-nuevo-usuario.php?incorrecto=true");
    
}else{
    
    if($contrasenna1 == $contrasenna2){
        usuarioDao::anadirUsuario($nombre, $email, $telefono1, $telefono2, $apellido1, $apellido2, $contrasenna1);
     
        Utilidades::redireccionar("sesionUsuario/formulario-inicio-sesion.php?exito=true");
    }else{
        Utilidades::redireccionar("sesionUsuario/formulario-nuevo-usuario.php?errorContrasenna=true");
    }
   
}

?>