<?php 
include("config.php");
$nombre_posicion = $_POST['nombre_posicion'];


$sql = "INSERT INTO tb_posicion(nombre_posicion) 
VALUES('$nombre_posicion')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="posicion.php";';
	echo '</script>';	
}
?>