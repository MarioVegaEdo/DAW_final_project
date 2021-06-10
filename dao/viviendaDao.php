<?php
require_once "clases/Vivienda.php";
require_once "utilidades/Utilidades.php";

class viviendaDao
{

    /* SELECT */
    public static function listarViviendas(): array
    {
        $datos = [];
        $rs = Utilidades::ejecutarSelect("SELECT  * FROM `vivienda` WHERE tipo NOT LIKE '***'", []);
        foreach ($rs as $rs) {
            $vivienda = new Vivienda($rs["idVivienda"], $rs["idDireccion"], $rs["descripcion"], $rs["superficie"], $rs["bannos"], $rs["caracteristicas"], $rs["tipo"], $rs["estado"], $rs["habitaciones"], $rs["idUsuario"], $rs["planta"], $rs["precio"], $rs["portada"], $rs["construida"], $rs["operacion"],$rs["imagenes"]);
            array_push($datos, $vivienda);
        }

        return $datos;
    }

    public static function listarViviendasPorCampos($camposBusqueda): array
    {
        $datos = [];
        $query = "SELECT * FROM vivienda V, direccion D WHERE V.idDireccion = D.idDireccion  AND tipo NOT LIKE '***' AND " . $camposBusqueda;
        $rs = Utilidades::ejecutarSelect($query, []);
        foreach ($rs as $rs) {
            $vivienda = new Vivienda($rs["idVivienda"], $rs["idDireccion"], $rs["descripcion"], $rs["superficie"], $rs["bannos"], $rs["caracteristicas"], $rs["tipo"], $rs["estado"], $rs["habitaciones"], $rs["idUsuario"], $rs["planta"], $rs["precio"], $rs["portada"], $rs["construida"], $rs["operacion"],$rs["imagenes"]);
            array_push($datos, $vivienda);
        }

        return $datos;
    }

    public static function viviendaObtenerPorId(int $id): Vivienda
    {
        $rs = Utilidades::ejecutarSelect("SELECT * FROM vivienda WHERE idVivienda=?", [
            $id
        ]);
        $vivienda = new Vivienda($rs[0]["idVivienda"], $rs[0]["idDireccion"], $rs[0]["descripcion"], $rs[0]["superficie"], $rs[0]["bannos"], $rs[0]["caracteristicas"], $rs[0]["tipo"], $rs[0]["estado"], $rs[0]["habitaciones"], $rs[0]["idUsuario"], $rs[0]["planta"], $rs[0]["precio"], $rs[0]["portada"], $rs[0]["construida"], $rs[0]["operacion"], $rs[0]["imagenes"]);

        return $vivienda;
    }

    public static function viviendaObtenerPorIdUsuario(int $id): array
    {
        $datos = [];
        $rs = Utilidades::ejecutarSelect("SELECT * FROM vivienda WHERE idUsuario = ? and tipo NOT LIKE '***'", [
            $id
        ]);
        foreach ($rs as $rs) {
            $vivienda = new Vivienda($rs["idVivienda"], $rs["idDireccion"], $rs["descripcion"], $rs["superficie"], $rs["bannos"], $rs["caracteristicas"], $rs["tipo"], $rs["estado"], $rs["habitaciones"], $rs["idUsuario"], $rs["planta"], $rs["precio"], $rs["portada"], $rs["construida"], $rs["operacion"], $rs["imagenes"]);
            array_push($datos, $vivienda);
        }
        return $datos;
    }

    /* UPDATE */
    public static function viviendaActualizar($idDireccion, $descripcion, $superficie, $precio, $tipo, $habitaciones, $bannos, $estado, $planta, $caracteristicas, $portada, $construida, $operacion, $imagenes, $idVivienda): void
    {
        Utilidades::ejecutarActualizacion("UPDATE `vivienda` SET `IdDireccion`=?,`descripcion`=?,`superficie`=?,`precio`=?,`tipo`=?,`habitaciones`=?,`bannos`=?,`estado`=?,`planta`=?,`caracteristicas`=?, `portada`=?,`construida`=?, `operacion` =?,`imagenes`=? WHERE `idVivienda`=?", [
            $idDireccion,
            $descripcion,
            $superficie,
            $precio,
            $tipo,
            $habitaciones,
            $bannos,
            $estado,
            $planta,
            $caracteristicas,
            $portada,
            $construida,
            $operacion,
            $imagenes,
            $idVivienda
        ]);
    }

    public static function viviendaEliminarPorIdUsuario($idUsuario): void
    {
        Utilidades::ejecutarActualizacion("UPDATE `vivienda` SET `idDireccion`=1,`descripcion`='***',`superficie`=0,`precio`=0,`tipo`='***',`habitaciones`=0,`bannos`=0,`estado`='***',`planta`='***',`caracteristicas`='***' WHERE idUsuario=?", [
            $idUsuario
        ]);
    }

    public static function viviendaEliminar($idVivienda): void
    {
        Utilidades::ejecutarActualizacion("UPDATE `vivienda` SET `idDireccion`=1,`descripcion`='***',`superficie`=0,`precio`=0,`tipo`='***',`habitaciones`=0,`bannos`='0',`estado`='***',`planta`='***',`caracteristicas`='***' WHERE idVivienda=?", [
            $idVivienda
        ]);
    }

    /* INSERT */
    public static function anadirVivienda($idDireccion, $descripcion, $superficie, $precio, $tipo, $habitaciones, $bannos, $estado, $planta, $idUsuario, $caracteristicas, $portada, $anno, $operacion,$imagenes)
    {
        Utilidades::ejecutarActualizacion(" INSERT INTO `vivienda`(`idDireccion`, `descripcion`, `superficie`,  `precio`, `tipo`, `habitaciones`, `bannos`, `estado`, `planta`, `idUsuario`, `caracteristicas`,`portada`, `construida`, `operacion`, `imagenes`)
 VALUES ( ?, ?, ?,?, ?, ?, ?, ?, ?,?, ?, ?, ?,?,?);", [
            $idDireccion,
            $descripcion,
            $superficie,
            $precio,
            $tipo,
            $habitaciones,
            $bannos,
            $estado,
            $planta,
            $idUsuario,
            $caracteristicas,
            $portada,
            $anno,
            $operacion,
            $imagenes
        ]);
    }

    public static function obtenerDueñoVivienda($idVivienda): int
    {
        $rs = Utilidades::ejecutarSelect("SELECT idUsuario FROM vivienda WHERE idVivienda = ?", [
            $idVivienda
        ]);
        $idDueño = ($rs[0]["idUsuario"]);
        return $idDueño;
    }
    
    public static function anadirImg($imagenes,$idVivienda)
    {
        Utilidades::ejecutarActualizacion(" UPDATE `vivienda` SET imagenes=? WHERE idVivienda = ?", [
            $imagenes,$idVivienda
 ]);
    }
    
    
   
    
}
//UPDATE `vivienda` SET imagenes= "hola|adios" WHERE idVivienda = 7
