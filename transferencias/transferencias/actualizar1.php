<?php

include("config.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nacimiento = $_POST['nacimiento'];
$nacionalidad = $_POST['nacionalidad'];
$posicion = $_POST['posicion'];
$pie_dominante = $_POST['pie_dominante'];

$sql = "UPDATE tb_jugador SET nombre = '$nombre', apellido = '$apellido', nacimiento = '$nacimiento', nacionalidad = '$nacionalidad', posicion = '$posicion', pie_dominante = '$pie_dominante'
WHERE id_jugador = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="jugador.php";';
    echo '</script>';
} 

?>
