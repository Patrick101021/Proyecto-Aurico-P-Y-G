<?php
include ("config.php");
$id = $_GET['id'];
$sql = "UPDATE tb_negociacion SET estado = 0 
WHERE id_negociacion = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="negociacion.php"';
    echo '</script>';
}



?>