<?php

include("config.php");

$id = $_POST['id'];
$nombre_agente = $_POST['nombre_agente'];
$nacionalidad = $_POST['nacionalidad'];
$comision = $_POST['comision'];


$sql = "UPDATE tb_agente SET nombre_agente = '$nombre_agente', nacionalidad = '$nacionalidad', comision = '$comision'
WHERE id_agente = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="agente.php";';
    echo '</script>';
} 

?>