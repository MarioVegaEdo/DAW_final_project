<?php
session_start();
require_once "dao/viviendaDao.php";
require_once "dao/usuarioDao.php";

$id = $_SESSION["id"];

$ruta = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
$viviendas=viviendaDao::viviendaObtenerPorIdUsuario($id);
foreach ($viviendas as $vivienda) {
    $portadaAnt = $vivienda->getPortada();
    unlink($ruta.$portadaAnt);
    $imgsAnt =$vivienda->getImagenes();
    $imagenesArray = explode("|", $imgsAnt);
    for($i=1; $i < count($imagenesArray) ;$i++){
        unlink($ruta.$imagenesArray[$i]);        
    }
}


viviendaDao::viviendaEliminarPorIdUsuario($id);
usuarioDao::usuarioEliminar($id);

Utilidades::redireccionar("sesionUsuario/cerrar-sesion.php");
?>