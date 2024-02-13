<?php

include("config.php");

$id = $_POST['id'];
$nombre_equipo = $_POST['nombre_equipo'];
$pais = $_POST['pais'];
$liga = $_POST['liga'];



$sql = "UPDATE tb_equipoa SET nombre_equipo = '$nombre_equipo', pais = '$pais', liga = '$liga'
WHERE id_equipoa = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="equipoa.php";';
    echo '</script>';
} 

?>