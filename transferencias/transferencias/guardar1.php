<?php 
include("config.php");
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nacimiento = $_POST['nacimiento'];
$nacionalidad = $_POST['nacionalidad'];
$posicion = $_POST['posicion'];
$pie_dominante = $_POST['pie_dominante'];

$sql = "INSERT INTO tb_jugador(nombre,apellido,nacimiento,nacionalidad,posicion,pie_dominante) 
VALUES('$nombre','$apellido','$nacimiento','$nacionalidad','$posicion','$pie_dominante')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="jugador.php";';
	echo '</script>';	
}
?>