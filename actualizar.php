<?php 
    include("database.php");
    $con=conectar();

$titulo=$_GET['titulo'];

$sql="SELECT * FROM libros WHERE Titulo='$titulo'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="text" class="form-control mb-3" name="Titulo" placeholder="Titulo" value="<?php echo $row['Titulo']  ?>">
                                <input type="text" class="form-control mb-3" name="Autor" placeholder="Serie" value="<?php echo $row['Autor']  ?>">
                                <input type="text" class="form-control mb-3" name="Año" placeholder="Tipo" value="<?php echo $row['Año']  ?>">
                                <input type="text" class="form-control mb-3" name="Especialidad" placeholder="Marca" value="<?php echo $row['Especialidad']  ?>">
                                <input type="text" class="form-control mb-3" name="Editorial" placeholder="Precio" value="<?php echo $row['Editorial']  ?>">
                                <input type="text" class="form-control mb-3" name="URL" placeholder="URL" value="<?php echo $row['URL']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>