<?php
include("database.php");
$con=conectar();

$titulo=$_POST['Titulo'];
$a = $_POST['Año'];
$autor=$_POST['Autor'];
$especialidad=$_POST['Especialidad'];
$editorial=$_POST['Editorial'];
$url=$_POST['URL'];

$sql="INSERT INTO libros VALUES('$titulo','$autor', $a, '$especialidad','$editorial', '$url')";
$query= mysqli_query($con,$sql);

if($query){

    Header("Location: libros.php");
    
}else {
}
?>