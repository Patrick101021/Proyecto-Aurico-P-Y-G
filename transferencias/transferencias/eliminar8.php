<?php
include ("config.php");
$id = $_GET['id'];
$sql = "UPDATE tb_posicion SET estado = 0 
WHERE id_posicion = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="posicion.php"';
    echo '</script>';
}



?>