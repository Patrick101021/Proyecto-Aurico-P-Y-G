<?php
include ("config.php");
$id = $_GET['id'];
$sql = "UPDATE tb_transferencia SET estado = 0 
WHERE id_transferencia = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="transferencia.php"';
    echo '</script>';
}



?>