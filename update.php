<?php

include("database.php");
$con=conectar();

$titulo=$_POST['Titulo'];
$autor=$_POST['Autor'];
$a=$_POST['Año'];
$esp=$_POST['Especialidad'];
$prec=$_POST['Editorial'];
$url = $_POST['URL'];

$sql="UPDATE libros SET `Titulo`='$titulo', `Autor`='$autor', `Año`='$a', `Especialidad`='$esp', `Editorial`='$prec', `URL`='$url' WHERE `Titulo`='$titulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: libros.php");
    }
?>