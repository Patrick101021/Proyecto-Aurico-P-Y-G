<?php
include ("config.php");
$id = $_GET['id'];
$sql = "UPDATE tb_jugador SET estado = 0
WHERE id_jugador = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="jugador.php"';
    echo '</script>';
}



?>
