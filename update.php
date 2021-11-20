<?php

include("conexion.php");
$con=conectar();


$id2=$_POST['id'];
$nombreCompleto=$_POST['nombreCompleto'];
$fechaNac=$_POST['fechaNac'];
$nombrePadre=$_POST['nombrePadre'];
$nombreMadre=$_POST['nombreMadre'];

$sql = "UPDATE acta_nac SET nombreCompleto='$nombreCompleto', fechaNac='$fechaNac', nombrePadre='$nombrePadre', nombreMadre='$nombreMadre' WHERE id = '$id2'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: acta_nac.php");
    }
?>