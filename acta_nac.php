<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM acta_nac";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Registro Civil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Datos del recien nacido</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombreCompleto" placeholder="Nombre completo">
                                    <input type="date" class="form-control mb-3" name="fechaNac" placeholder="Fecha nacimiento">
                                    <input type="text" class="form-control mb-3" name="nombrePadre" placeholder="Nombre completo del padre">
                                    <input type="text" class="form-control mb-3" name="nombreMadre" placeholder="Nombre completo de la madre">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>id</th>
                                        <th>nombreCompleto</th>
                                        <th>fechaNac</th>
                                        <th>nombrePadre</th>
                                        <th>nombreMadre</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombreCompleto']?></th>
                                                <th><?php  echo $row['fechaNac']?></th>
                                                <th><?php  echo $row['nombrePadre']?></th>    
                                                <th><?php  echo $row['nombreMadre']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>