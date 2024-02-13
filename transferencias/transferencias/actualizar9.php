<?php

include("config.php");

$id = $_POST['id'];
$id_jugador = $_POST['id_jugador'];
$id_equipoa = $_POST['id_equipoa'];
$id_equipod = $_POST['id_equipod'];
$id_contrato = $_POST['id_contrato'];
$id_agente = $_POST['id_agente'];
$id_liga = $_POST['id_liga'];
$id_posicion = $_POST['id_posicion'];
$id_negociacion = $_POST['id_negociacion'];
$monto_transferencia = $_POST['monto_transferencia'];
$años_contrato = $_POST['años_contrato'];





$sql = "UPDATE tb_transferencia SET id_jugador = '$id_jugador', id_equipoa = '$id_equipoa', id_equipod = '$id_equipod', id_agente = '$id_agente', id_liga = '$id_liga', id_posicion = '$id_posicion', id_negociacion = '$id_negociacion', monto_transferencia = '$monto_transferencia', años_contrato = '$años_contrato'
WHERE id_transferencia = $id";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
    echo 'window.location="transferencia.php";';
    echo '</script>';
} 

?>