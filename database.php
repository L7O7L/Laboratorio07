<?php 

$conexion = mysqli_connect("localhost", "root", "", "usuarios");

function conectar(){

    $bd = "biblioteca";
    $conexion02 = mysqli_connect("localhost", "root", "", "biblioteca");

    mysqli_select_db($conexion02, $bd);

    return $conexion02;

}

?>