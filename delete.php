<?php

include("database.php");
$con=conectar();

$titulo=$_GET['titulo'];

$sql="DELETE FROM libros WHERE Titulo='$titulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: libros.php");
    }
?>
