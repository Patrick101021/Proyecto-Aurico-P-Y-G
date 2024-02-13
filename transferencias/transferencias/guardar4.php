<?php 
include("config.php");
$nombre_liga = $_POST['nombre_liga'];
$pais = $_POST['pais'];

$sql = "INSERT INTO tb_liga(nombre_liga,pais) 
VALUES('$nombre_liga','$pais')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="liga.php";';
	echo '</script>';	
}
?>