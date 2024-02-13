<?php
include ("config.php");
$id = $_GET['id'];
$sql = "UPDATE tb_liga SET estado = 0 
WHERE id_liga = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="liga.php"';
    echo '</script>';
}



?>