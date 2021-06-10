<?php
require_once "clases/Usuario.php";
require_once "utilidades/Utilidades.php";

class usuarioDao
{

    public static function usuarioObtenerId(int $email): Usuario
    {
        $rs = Utilidades::ejecutarSelect("SELECT email FROM usuario WHERE email=?", [
            $email
        ]);
        $usuario = new Usuario($rs[0]["idUsuario"], $rs[0]["nombre"], $rs[0]["email"], $rs[0]["apellido1"], $rs[0]["apellido2"], $rs[0]["telefono1"], $rs[0]["telefono2"], $rs[0]["codigoCookie"], $rs[0]["contrasenna"]);

        return $usuario;
    }

    /* SELECT */
    public static function usuarioObtenerPorId(int $id): Usuario
    {
        $rs = Utilidades::ejecutarSelect("SELECT * FROM usuario WHERE idUsuario=?", [
            $id
        ]);
        $usuario = new Usuario($rs[0]["idUsuario"], $rs[0]["nombre"], $rs[0]["email"], $rs[0]["apellido1"], $rs[0]["apellido2"], $rs[0]["telefono1"], $rs[0]["telefono2"], $rs[0]["codigoCookie"], $rs[0]["contrasenna"]);

        return $usuario;
    }

    public static function usuarioObtenerPorEmail(string $email): Usuario
    {
        $rs = Utilidades::ejecutarSelect("SELECT email FROM usuario WHERE email=?", [
            $email
        ]);
        $usuario = new Usuario($rs[0]["idUsuario"], $rs[0]["nombre"], $rs[0]["email"], $rs[0]["apellido1"], $rs[0]["apellido2"], $rs[0]["telefono1"], $rs[0]["telefono2"], $rs[0]["codigoCookie"], $rs[0]["contrasenna"]);
        // Antes estaba solo el email

        return $usuario;
    }

    public static function usuarioObtenerPorValorParaComprobacion(string $email, $valorParaComprobacion): Usuario
    {
        $rs = Utilidades::ejecutarSelect("SELECT idUsuario, nombre FROM usuario WHERE BINARY email=? AND BINARY $campoParaComprobacion=?", [
            $email,
            $valorParaComprobacion
        ]);
        $usuario = new Usuario($rs[0]["email"]);

        return $usuario;
    }

    /* UPDATE */
    public static function usuarioActualizar($idUsuario, $nombre, $email, $telefono1, $telefono2, $apellido1, $apellido2, $contrasenna): void
    {
        Utilidades::ejecutarActualizacion("UPDATE `usuario` SET `nombre`=?,`email`=?,`telefono1`=?,`telefono2`=?,`apellido1`=?,`apellido2`=?,`contrasenna`=?  WHERE idUsuario=?", [
            $nombre,
            $email,
            $telefono1,
            $telefono2,
            $apellido1,
            $apellido2,
            $contrasenna,
            $_SESSION["id"]
        ]);
    }

    /* INSERT */
    public static function anadirUsuario($nombre, $email, $telefono1, $telefono2, $apellido1, $apellido2, $contrasenna)
    {
        Utilidades::ejecutarActualizacion(" INSERT INTO usuario( `nombre`, `email`, `telefono1`, `telefono2`, `apellido1`, `apellido2`, `contrasenna`)
 VALUES ( ?, ?, ?, ?, ?, ?, ?);", [
            $nombre,
            $email,
            $telefono1,
            $telefono2,
            $apellido1,
            $apellido2,
            $contrasenna
        ]);
    }

    public static function usuarioEliminar($idUsuario): void
    {
        Utilidades::ejecutarActualizacion("UPDATE `usuario` SET `nombre`='***',`email`='***',`telefono1`='***',`telefono2`='***',`apellido1`='***',`apellido2`='***',`contrasenna`='***'  WHERE idUsuario=?", [
            $_SESSION["id"]
        ]);
    }
}