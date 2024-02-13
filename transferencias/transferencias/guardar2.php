<?php 
include("config.php");
$nombre_agente = $_POST['nombre_agente'];
$nacionalidad = $_POST['nacionalidad'];
$comision = $_POST['comision'];


$sql = "INSERT INTO tb_agente(nombre_agente,nacionalidad,comision) 
VALUES('$nombre_agente','$nacionalidad','$comision')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="agente.php";';
	echo '</script>';	
}
?>