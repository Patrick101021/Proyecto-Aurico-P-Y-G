<?php 
include("config.php");
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

$sql = "INSERT INTO tb_transferencia(id_jugador,id_equipoa,id_equipod,id_contrato,id_agente,id_liga,id_posicion,id_negociacion,monto_transferencia,años_contrato) 
VALUES('$id_contrato','$id_equipoa','$id_equipod','$id_contrato','$id_agente','$id_liga','$id_posicion','$id_negociacion','$monto_transferencia','$años_contrato')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Guardado");';
	echo 'window.location="transferencia.php";';
	echo '</script>';	
}
?>