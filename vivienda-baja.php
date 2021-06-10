<?php
require_once "dao/viviendaDao.php";

$id = $_REQUEST["id"];


$vivienda = viviendaDao::viviendaObtenerPorId($id);
$portadaAnt = $vivienda->getPortada(); 
$imgsAnt =$vivienda->getImagenes();
$ruta = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
unlink($ruta.$portadaAnt);
$imagenesArray = explode("|", $imgsAnt);
for($i=1; $i < count($imagenesArray) ;$i++){
    unlink($ruta.$imagenesArray[$i]);
    
}
viviendaDao::viviendaEliminar($id);


Utilidades::redireccionar("usuario-detalle.php?correcto=true");
?>