<?php
try {
    $servidor = 'localhost';
    $usuario = 'root';
    $password = 'root';
    $bd = 'portafolio';

    $coneccion = mysqli_connect($servidor, $usuario, $password, $bd);
    echo ('conexion exitosa');
} catch (\Throwable $th) {
    var_dump($th);
}