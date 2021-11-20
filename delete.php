<?php

include("conexion.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM acta_nac  WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: acta_nac.php");
    }
?>
