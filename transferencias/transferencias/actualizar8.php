<?php

include("config.php");

$id = $_POST['id'];
$nombre_posicion = $_POST['nombre_posicion'];




$sql = "UPDATE tb_posicion SET nombre_posicion = '$nombre_posicion'
WHERE id_posicion = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="posicion.php";';
    echo '</script>';
} 

?>