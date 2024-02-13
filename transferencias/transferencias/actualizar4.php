<?php

include("config.php");

$id = $_POST['id'];
$nombre_liga = $_POST['nombre_liga'];
$pais = $_POST['pais'];


$sql = "UPDATE tb_liga SET nombre_liga = '$nombre_liga', pais = '$pais'
WHERE id_liga = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="liga.php";';
    echo '</script>';
} 

?>