<?php
include ("config.php");
$id = $_GET['id'];
$sql = "UPDATE tb_equipoa SET estado = 0 
WHERE id_equipoa = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="equipoa.php"';
    echo '</script>';
}



?>