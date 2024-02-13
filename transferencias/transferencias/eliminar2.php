<?php
include ("config.php");
$id = $_GET['id'];
$sql = "UPDATE tb_agente SET estado = 0 
WHERE id_agente = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="agente.php"';
    echo '</script>';
}



?>