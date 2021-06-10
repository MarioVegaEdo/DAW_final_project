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
$contrasenna = $_REQUEST["contrasenna1"];
$contrasennaNueva = $_REQUEST["contrasenna2"];
$contrasennaConfirmar = $_REQUEST["contrasenna3"];
$idUsuario = $_SESSION["id"];
$contrasennaActualizar = "";
// Comprobar si contraseña coincide y si no redirigir
$usuario = usuarioDao::usuarioObtenerPorId($idUsuario);
if ($usuario->getContrasenna() == $contrasenna) {

    if ($contrasennaNueva == $contrasennaConfirmar) {

        if (!empty($contrasennaConfirmar)) {
            $contrasennaActualizar = $contrasennaConfirmar;
        } else {
            $contrasennaActualizar = $contrasenna;
        }

        usuarioDao::usuarioActualizar($idUsuario, $nombre, $email, $telefono1, $telefono2, $apellido1, $apellido2, $contrasennaActualizar);
        $_SESSION["nombre"] = $nombre;
        $_SESSION["identificador"] = $email;
        Utilidades::redireccionar("usuario-detalle.php?correcto=true");
    } else {

        Utilidades::redireccionar("usuario-detalle.php?incorrecto=true");
    }
} else {

    Utilidades::redireccionar("usuario-detalle.php?incorrecto=true");
}

usuarioDao::usuarioActualizar($idUsuario, $nombre, $email, $telefono1, $telefono2, $apellido1, $apellido2, $contrasenna);
$_SESSION["nombre"] = $nombre;
$_SESSION["identificador"] = $email;
Utilidades::redireccionar("usuario-detalle.php");

?>

