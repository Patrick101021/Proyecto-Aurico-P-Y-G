<?php

include("config.php");

$id = $_POST['id'];
$inicio_contrato = $_POST['inicio_contrato'];
$fin_contrato = $_POST['fin_contrato'];
$salario = $_POST['salario'];


$sql = "UPDATE tb_contrato SET inicio_contrato = '$inicio_contrato', fin_contrato = '$fin_contrato', salario = '$salario'
WHERE id_contrato = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="contrato.php";';
    echo '</script>';
} 

?>


