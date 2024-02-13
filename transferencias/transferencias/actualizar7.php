<?php

include("config.php");

$id = $_POST['id'];
$bonus = $_POST['bonus'];




$sql = "UPDATE tb_negociacion SET bonus = '$bonus'
WHERE id_negociacion = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="negociacion.php";';
    echo '</script>';
} 

?>