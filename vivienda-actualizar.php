<?php
require_once "dao/viviendaDao.php";
require_once "dao/direccionDao.php";
session_start();

$idDireccion = $_REQUEST["idDireccion"];
$provincia =  $_REQUEST["provincia"];
$municipio =  $_REQUEST["municipio"];
$nombreVia =  $_REQUEST["nombrevia"];
$tipoVia =  $_REQUEST["tipoVia"];
$numero =  $_REQUEST["numero"];
$letra =  $_REQUEST["letra"];
$codPosta = $_REQUEST["cp"];
$piso = $_REQUEST["piso"];
$idUsuario = $_SESSION["id"];

$descripcion = $_REQUEST["descripcion"];
$superficie = $_REQUEST["superficie"];
$bannos = $_REQUEST["bannos"];
$operacion= $_REQUEST["operacion"];
$caracteristicas = $_REQUEST["caracteristicas"];
$tipo = $_REQUEST["tipo"];
$estado = $_REQUEST["estado"];
$habitaciones = $_REQUEST["habitaciones"];
$planta = $_REQUEST["planta"];
$precio = $_REQUEST["precio"];
$id = $_REQUEST["id"];
$construida = $_REQUEST["anno"];
$portadaAnt = $_REQUEST["portadaAnt"];
$imgsAnt = $_REQUEST["imgsAnt"];

$nombrearray ="";

if($_FILES['imgs']['name'][0] == null){
    $nombrearray=$imgsAnt;

    
}else{
for($x=0; $x<count($_FILES["imgs"]["name"]); $x++){

    $file = $_FILES["imgs"];
    $nombre = $file["name"][$x];
    $tipoImg = $file["type"][$x];
    $tamannoImagen=$file["size"][$x];
    $ruta_provisional = $file["tmp_name"][$x];
    $carpeta = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
    
    if($tipoImg =='image/jpeg' || $tipoImg =='image/jpg' || $tipoImg =='image/png'){
        
        move_uploaded_file($ruta_provisional,$carpeta.$nombre);
        $nombrearray = $nombrearray."|".$nombre;
    }
     
}
$carpeta = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
$imagenesArray = explode("|", $imgsAnt);
for($i=1; $i < count($imagenesArray) ;$i++){
    unlink($carpeta.$imagenesArray[$i]);
    
}
}


if($_FILES['portada']['name'] == null){
    
    $nombreImagen=$portadaAnt;
    $tipoImagen='image/jpg';
    $tamannoImagen=10;
    
}else{
    
    $nombreImagen=$_FILES['portada']['name'];
    $tipoImagen=$_FILES['portada']['type'];
    $tamannoImagen=$_FILES['portada']['size'];
    $ruta = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
    unlink($ruta.$portadaAnt);
}



if($tamannoImagen <=3000000){
    
    if($tipoImagen =='image/jpeg' || $tipoImagen =='image/jpg' || $tipoImagen =='image/png'){
        $carpetaDestino=$_SERVER['DOCUMENT_ROOT'].'/uploads/';
        move_uploaded_file($_FILES['portada']['tmp_name'],$carpetaDestino.$nombreImagen);
        
    }else{
        
        echo 'solo permite JPG, PNG y JPGE';
        
    }
}else{
    
    echo 'tamaño demasiado grande (3MB máximo)';
    
}
$idUsuarioC = viviendaDao::obtenerDueñoVivienda($id);
if($idUsuario == $idUsuarioC){
    viviendaDao::viviendaActualizar($idDireccion, $descripcion, $superficie,  $precio, $tipo, $habitaciones, $bannos, $estado, $planta, $caracteristicas,$nombreImagen,$construida, $operacion, $nombrearray, $id);
    direccionDao::direccionActualizar($codPosta, $tipoVia, $nombreVia, $municipio, $provincia, $numero, $piso, $letra,$idDireccion);
  //  echo  $codPosta, $tipoVia, $nombreVia, $municipio, $provincia, $numero, $piso, $letra,$idDireccion;
   Utilidades::redireccionar("usuario-detalle.php?correcto=true");
}else{
    Utilidades::redireccionar("usuario-detalle.php?noCoincide=true");
}
?>



