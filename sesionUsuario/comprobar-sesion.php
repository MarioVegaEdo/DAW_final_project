<?php

require_once "utilidades/Utilidades.php";
session_start(); 

if (isset($_SESSION["sesionIniciada"])) { 

   
    if (isset($_COOKIE["identificador"])) {
        utilidades::establecerCookieRecuerdame($_COOKIE["identificador"], $_COOKIE["codigoCookie"]);
    }

    

} else { 
    //Si no hay sesión iniciada
    if (isset($_COOKIE["identificador"])) { 
        $identificador = $_COOKIE["identificador"];
        $codigoCookie = $_COOKIE["codigoCookie"];

     
        $filaUsuario = utilidades::obtenerUsuario($identificador, null, $codigoCookie);

        if ($filaUsuario) { 
        
            utilidades::anotarDatosSesionRam($filaUsuario["idUsuario"], $identificador, $filaUsuario["nombre"]);

           
            utilidades::generarCookieRecuerdame($identificador);
        } else { 
            utilidades::borrarCookieRecuerdame($identificador);

        
            utilidades::redireccionar("vivienda-listado.php");
        }
    } else if (isset($_REQUEST["identificador"])) { 
        $identificador = $_REQUEST["identificador"];
        $contrasenna = $_REQUEST["contrasenna"];
        $recuerdame = isset($_REQUEST["recuerdame"]); 

        $filaUsuario = utilidades::obtenerUsuario($identificador, $contrasenna, null);
    
        if ($filaUsuario) { 
            utilidades::anotarDatosSesionRam($filaUsuario["idUsuario"], $identificador, $filaUsuario["nombre"]);

         
            if ($recuerdame) {
                utilidades::generarCookieRecuerdame($identificador);
            }

          
        } else { 
            
          utilidades::redireccionar("sesionUsuario/formulario-inicio-sesion.php?incorrecto=true");
        }
    } else { 
        
 //             utilidades::redireccionar("vivienda-listado.php");
    }
  //  utilidades::redireccionar("vivienda-listado.php");
}