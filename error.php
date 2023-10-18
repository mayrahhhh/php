<?php

if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
    mostrarErrorAutenticacion("AUTENTICACIÓN INCORRECTA");
}

$nombre = $_SERVER['PHP_AUTH_USER'];
$clave = $_SERVER['PHP_AUTH_PW'];

if (autenticar($nombre, $clave)) {
    mostrarExitoAutenticacion("AUTENTICACIÓN CORRECTA");
} else {
    mostrarErrorAutenticacion("AUTENTICACIÓN INCORRECTA");
}

function mostrarErrorAutenticacion($mensaje) {
    header('index.php"');
    header('HTTP/1.0 401 Unauthorized');
    echo $mensaje;
    exit;
}

function mostrarExitoAutenticacion($mensaje) {
    echo $mensaje;
}

function autenticar($nombre, $clave) {

    return true;
}
