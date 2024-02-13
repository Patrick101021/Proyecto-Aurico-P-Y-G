<?php
include ("config.php");
$id = $_GET['id'];
$sql = "UPDATE tb_contrato SET estado = 0 
WHERE id_contrato = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="contrato.php"';
    echo '</script>';
}



?>