<?php
require_once "dao/viviendaDao.php";
require_once "dao/direccionDao.php";
session_start();


$descripcion = $_REQUEST["descripcion"];
$superficie = $_REQUEST["superficie"];
$bannos = $_REQUEST["bannos"];
$caracteristicas = $_REQUEST["caracteristicas"];
$tipo = $_REQUEST["tipo"];
$estado = $_REQUEST["estado"];
$habitaciones = $_REQUEST["habitaciones"];
$planta = $_REQUEST["planta"];
$precio = $_REQUEST["precio"];
$operacion = $_REQUEST["operacion"];
$anno = $_REQUEST["anno"];
$idUsuario =  $_SESSION["id"];

$provincia =  $_REQUEST["provincia"];
$municipio =  $_REQUEST["municipio"];
$nombreVia =  $_REQUEST["nombrevia"];
$tipoVia =  $_REQUEST["tipoVia"];
$numero =  $_REQUEST["numero"];
$letra =  $_REQUEST["letra"];
$codPosta = $_REQUEST["cp"];
$piso = $_REQUEST["piso"];

$nombrearray ="";

for($x=0; $x<count($_FILES["imgs"]["name"]); $x++){
    $file = $_FILES["imgs"];
    $nombre = $file["name"][$x];
    $tipoIMG = $file["type"][$x];
    $tamannoImagen=$file["size"][$x];
     $ruta_provisional = $file["tmp_name"][$x];
//     $size = $file["size"][$x];
//     $dimensiones = getimagesize($ruta_provisional);
//     $width = $dimensiones[0];
//     $height = $dimensiones[1];
    $carpeta = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
    if($tipoIMG =='image/jpeg' || $tipoIMG =='image/jpg' || $tipoIMG =='image/png'){

        move_uploaded_file($ruta_provisional,$carpeta.$nombre);
        $nombrearray = $nombrearray."|".$nombre;
       
        //Codigo para insertar imagenes a tu Base de datos.
        //Sentencia SQL
    }
    
    
    
}

// viviendaDao::anadirImg($nombrearray, 7);


$nombreImagen=$_FILES['portada']['name'];
$tipoImagen=$_FILES['portada']['type'];
$tamannoImagen=$_FILES['portada']['size'];

//echo $_FILES['portada']['name'];

//echo "sdad".$caracteristicas;
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

$direccionABuscar = direccionDao::direccionObtener($codPosta, $tipoVia, $nombreVia, $municipio, $provincia, $numero, $piso, $letra);

if($direccionABuscar == 0){
    direccionDao::anadirDireccion($codPosta, $tipoVia, $nombreVia, $municipio, $provincia, $numero, $piso, $letra);
    $idDireccion = direccionDao::buscarIdDireccion($codPosta, $tipoVia, $nombreVia, $municipio, $provincia, $numero, $piso, $letra);
    viviendaDao::anadirVivienda($idDireccion , $descripcion, $superficie, $precio, $tipo, $habitaciones, $bannos, $estado, $planta, $idUsuario, $caracteristicas,$nombreImagen,$anno,$operacion,$nombrearray);
    Utilidades::redireccionar("usuario-detalle.php?correcto=true");
}else{
    Utilidades::redireccionar("vivienda-formulario-registro.php?existe=true");
    
}



?>




