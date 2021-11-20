<?php
include("conexion.php");
$con=conectar();

$id2=$_POST['id'];
$nombreCompleto=$_POST['nombreCompleto'];
$fechaNac=$_POST['fechaNac'];
$nombrePadre=$_POST['nombrePadre'];
$nombreMadre=$_POST['nombreMadre'];


$sql="INSERT INTO acta_nac VALUES('$id2','$nombreCompleto','$fechaNac','$nombrePadre','$nombreMadre')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: acta_nac.php");
}
?>