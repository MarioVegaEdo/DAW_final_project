<?php
	require_once "../utilidades/Utilidades.php";

	session_start();

    // Borramos (o pedimos borrar) las cookies que soportasen la sesión con el "recuérdame":
    Utilidades::borrarCookieRecuerdame($_SESSION["identificador"]);

    session_destroy();
	
	// No hace falta hacer unset($_SESSION), porque este PHP no tiene HTML.

	// Se redirige al cliente a otro PHP.
	Utilidades::redireccionar("formulario-inicio-sesion.php?sesionCerrada=true");
?>