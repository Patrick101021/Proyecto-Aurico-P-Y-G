<?php 
include("config.php");
$bonus = $_POST['bonus'];


$sql = "INSERT INTO tb_negociacion(bonus) 
VALUES('$bonus')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="negociacion.php";';
	echo '</script>';	
}
?>