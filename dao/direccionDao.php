<?php
require_once "clases/Direccion.php";
require_once "utilidades/Utilidades.php";

class direccionDao
{

    /* UPDATE */
    public static function direccionActualizar( $codPosta, $tipoVia, $nombre, $municipio, $provincia, $numero, $piso, $letra,$idDireccion): void
    {
        Utilidades::ejecutarActualizacion("UPDATE direccion SET codPosta = ?, tipoVia = ?, nombre = ?, municipio = ?, provincia = ?, numero = ?, piso = ?, letra = ?  WHERE idDireccion=?", [           
            $codPosta,
            $tipoVia,
            $nombre,
            $municipio,
            $provincia,
            $numero,
            $piso,
            $letra,
            $idDireccion
        ]);
    }

    /* INSERT */
    public static function anadirDireccion($codPosta, $tipoVia, $nombre, $municipio, $provincia, $numero, $piso, $letra)
    {
        Utilidades::ejecutarActualizacion(" INSERT INTO direccion( codPosta, tipoVia, nombre, municipio, provincia, numero, piso, letra) VALUES (?,?,?,?,?,?,?,?);", [
            $codPosta,
            $tipoVia,
            $nombre,
            $municipio,
            $provincia,
            $numero,
            $piso,
            $letra
        ]);
    }

    public static function direccionEliminar($idDireccion): void
    {
        Utilidades::ejecutarActualizacion("UPDATE direccion SET codPosta = 00000, tipoVia = '***', nombre = '***', municipio = '***', provincia = '***', numero = 0, piso = 0, letra = '***'  WHERE idDireccion= ? ", [
            $idDireccion
        ]);
    }

    public static function buscarIdDireccion($codPosta, $tipoVia, $nombre, $municipio, $provincia, $numero, $piso, $letra): int
    {
        $rs = Utilidades::ejecutarSelect("SELECT idDireccion FROM direccion WHERE codPosta = ? and tipoVia = ? and nombre = ? and municipio = ? and provincia = ? and numero = ? and piso = ? and letra  = ?", [
            $codPosta,
            $tipoVia,
            $nombre,
            $municipio,
            $provincia,
            $numero,
            $piso,
            $letra
        ]);
        $idDireccion = ($rs[0]["idDireccion"]);
        return $idDireccion;
    }

    public static function direccionObtenerPorId($id): Direccion
    {
        $rs = Utilidades::ejecutarSelect("SELECT * FROM direccion WHERE idDireccion = ?", [
            $id
        ]);
        $direccion = new Direccion($rs[0]["idDireccion"], $rs[0]["provincia"], $rs[0]["municipio"], $rs[0]["nombre"], $rs[0]["tipoVia"], $rs[0]["numero"], $rs[0]["letra"], $rs[0]["codPosta"], $rs[0]["piso"]);

        return $direccion;
    }

    public static function direccionObtener($codPosta, $tipoVia, $nombre, $municipio, $provincia, $numero, $piso, $letra): int
    {
        $rs = Utilidades::ejecutarSelect("SELECT idDireccion FROM direccion WHERE codPosta = ? and tipoVia = ? and nombre = ? and municipio = ? and provincia = ? and numero = ? and piso = ? and letra  = ?", [
            $codPosta,
            $tipoVia,
            $nombre,
            $municipio,
            $provincia,
            $numero,
            $piso,
            $letra
        ]);
        $direccion = ($rs[0]["idDireccion"]);
        if ($direccion == null) {
            $direccion = 0;
            return $direccion;
        } else {

            return $direccion;
        }
    }
}
?>
