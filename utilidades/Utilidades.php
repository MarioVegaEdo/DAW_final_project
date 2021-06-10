<?php

class Utilidades
{

    static $pdo = null;

    public static function conectarBd()
    {
        $servidor = "localhost";
        $identificador = "root";
        $contrasenna = "";
        $bd = "housefinder"; // Schema
        $opciones = [
            PDO::ATTR_EMULATE_PREPARES => false, // Modo emulación desactivado para prepared statements "reales"
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Que los errores salgan como excepciones.
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // El modo de fetch que queremos por defecto.
        ];

        try {
            $pdo = new PDO("mysql:host=$servidor;dbname=$bd;charset=utf8", $identificador, $contrasenna, $opciones);
        } catch (Exception $e) {
            error_log("Error al conectar: " . $e->getMessage());
            exit("Error al conectar" . $e->getMessage());
        }

        return $pdo;
    }

    public static function ejecutarSelect(string $sql, array $parametros): array
    {
        if (! isset(self::$pdo))
            self::$pdo = self::conectarBd();

        $select = self::$pdo->prepare($sql);
        $select->execute($parametros);
        return $select->fetchAll();
    }

    public static function ejecutarActualizacion(string $sql, array $parametros): void
    {
        if (! isset(self::$pdo))
            self::$pdo = self::conectarBd();

        $actualizacion = self::$pdo->prepare($sql);
        $actualizacion->execute($parametros);
    }

    // Esta función redirige a otra página y deja de ejecutar el PHP que la llamó:
    function redireccionar($url)
    {
        header("Location: $url");
        exit();
    }

    function obtenerFecha(): string
    {
        return date("Y-m-d H:i:s");
    }

    function establecerCookieRecuerdame($email, $codigoCookie)
    {
        // Enviamos el código cookie al cliente, junto con su identificador.
        setcookie("identificador", $email, time() + 60); // Un mes sería: +30*24*60*60
        setcookie("codigoCookie", $codigoCookie, time() + 60); // Un mes sería: +30*24*60*60
    }

    function generarCadenaAleatoria()
    {
        for ($s = '', $i = 0, $z = strlen($a = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789') - 1; $i != 32; $x = rand(0, $z), $s .= $a{$x}, $i ++);
        return $s;
    }

    public static function usuarioActualizar($nombre, $email, $telefono1, $telefono2, $apellido1, $apellido2, $contrasenna): void
    {
        Utilidades::ejecutarActualizacion("UPDATE `usuario` SET `nombre`=?,`email`=?,`telefono1`=?,`telefono2`=?,`apellido1`=?,`apellido2`=?,`contrasenna`=?,`codigoCookie`=?  WHERE idUsuario=?", [
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

    function generarCookieRecuerdame($email)
    {
        // Creamos un código cookie muy complejo (pero no necesariamente único).
        $codigoCookie = self::generarCadenaAleatoria(); // Random...

        self::ejecutarActualizacion("UPDATE usuario SET codigoCookie=? WHERE email=?", [
            $codigoCookie,
            $email
        ]);
        // Anotamos el código cookie en nuestra BD.

        // Para una seguridad óptima convendriá anotar en la BD la fecha
        // de caducidad de la cookie y no aceptar ninguna cookie pasada dicha fecha.

        self::establecerCookieRecuerdame($email, $codigoCookie);
    }

    function borrarCookieRecuerdame($email)
    {
        // Eliminamos el código cookie de nuestra BD.
        self::ejecutarActualizacion("UPDATE usuario SET codigoCookie=NULL WHERE email=?", [
            $email
        ]);

        setcookie("identificador", "", time() - 3600); // Tiempo en el pasado, para (pedir) borrar la cookie.
        setcookie("codigoCookie", "", time() - 3600); // Tiempo en el pasado, para (pedir) borrar la cookie.
    }

    function anotarDatosSesionRam($id, $identificador, $nombre)
    {
        $_SESSION["sesionIniciada"] = "";
        $_SESSION["id"] = $id;
        $_SESSION["identificador"] = $identificador;
        $_SESSION["nombre"] = $nombre;
    }

    function obtenerUsuario($email, $contrasenna, $codigoCookie)
    {
        // $pdo = conectarBd();
        if ($contrasenna) {
            $campoParaComprobacion = "contrasenna";
            $valorParaComprobacion = $contrasenna;
        } else {
            $campoParaComprobacion = "codigoCookie";
            $valorParaComprobacion = $codigoCookie;
        }

        $rs = self::ejecutarSelect("SELECT idUsuario, nombre FROM usuario WHERE BINARY email=? AND BINARY $campoParaComprobacion=?", [
            $email,
            $valorParaComprobacion
        ]);

        if ($rs)
            return $rs[0];
        else
            return null;
    }

    function generaQuery($opcionDir, $dirDato, $superficie, $bannos, $tipo,$anno, $estado, $habitaciones, $planta, $precio1, $precio2)
    {
        $query = " ";

        if ($opcionDir == "mun") {
            if (! is_numeric($dirDato)) {

                $query = $query . "D.municipio LIKE '" . $dirDato . "'";
            } else {
                if (is_numeric($dirDato)) {
                    self::redireccionar("vivienda-listado.php?error");
                }
            }
        } else {
            if ($opcionDir == "cp") {
                if (is_numeric($dirDato)) {

                    $query = $query . "D.codPosta = " . $dirDato;
                }else {
                if (!is_numeric($dirDato)) {
                    
                    self::redireccionar("vivienda-listado.php?error");
                }
                
            }
            } 
        }

        // if ($opcionDir == "cp") {
        // if (is_numeric($dirDato)) {

        // $query = $query . "D.codPosta = " . $dirDato;
        // } else {

        // self::redireccionar("vivienda-listado.php?error");
        // }
        // }

        if ($superficie != null) {

            $query = $query . " AND superficie >= " . $superficie;
        }
        if ($bannos != null) {
            $signo = self::controlarCamposSelectNumericos($bannos);

            $query = $query . " AND bannos " . $signo . $bannos;
        }
        if ($tipo != null) {

            $query = $query . " AND tipo LIKE '" . $tipo . "'";
        }
        if($anno !=null){
            $query = $query . " AND construida >= " . $superficie;
        }
        if ($estado != null) {

            $query = $query . " AND estado LIKE '" . $estado . "'";
        }
        if ($habitaciones != null) {
            $signo = self::controlarCamposSelectNumericos($habitaciones);

            $query = $query . " AND habitaciones " . $signo . $habitaciones;
        }
        if ($planta != null) {

            $query = $query . " AND superficie LIKE '" . $planta . "'";
        }

        $queryPrecio = self::queryPrecio($precio1, $precio2);
        // TODO precio
        $query = $query . $queryPrecio;

        return $query;
    }

    function controlarCamposSelectNumericos($cantidad)
    {
        $queryCN = "";
        if ($cantidad == 3) {

            $queryCN = ">=";
        } else {

            $queryCN = "=";
        }

        return $queryCN;
    }

    function queryPrecio($precio1, $precio2)
    {
        $queryP = "";

        if ($precio1 == $precio2 && ($precio1 != null || $precio1 == 0)) {
            $queryP = "  ";
        } else {
            if ($precio1 == null || $precio1 == 0) {
                $queryP = " AND precio = " . $precio2;
            } else {
                if ($precio2 == null || $precio2 == 0) {

                    $queryP = " AND precio = " . $precio1;
                } else {
                    if ($precio1 > $precio2) {
                        $queryP = " AND precio BETWEEN " . $precio2 . " AND " . $precio1;
                    } else {
                        if ($precio1 < $precio2) {
                            $queryP = " AND precio BETWEEN " . $precio1 . " AND " . $precio2;
                        }
                    }
                }
            }
        }
        echo $queryP;
        return $queryP;
    }
}