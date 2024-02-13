<?php 
include("config.php");
$nombre_equipo = $_POST['nombre_equipo'];
$pais = $_POST['pais'];
$liga = $_POST['liga'];

$sql = "INSERT INTO tb_equipoa(nombre_equipo,pais,liga) 
VALUES('$nombre_equipo','$pais','$liga')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="equipoa.php";';
	echo '</script>';	
}
?>