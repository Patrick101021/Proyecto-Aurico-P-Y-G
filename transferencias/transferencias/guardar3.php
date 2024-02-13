<?php 
include("config.php");
$inicio_contrato = $_POST['inicio_contrato'];
$fin_contrato = $_POST['fin_contrato'];
$salario = $_POST['salario'];


$sql = "INSERT INTO tb_contrato(inicio_contrato,fin_contrato,salario) 
VALUES('$inicio_contrato','$fin_contrato','$salario')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="contrato.php";';
	echo '</script>';	
}
?>