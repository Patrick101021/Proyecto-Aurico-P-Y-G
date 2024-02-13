<?php
include("config.php");
$query = "SELECT * FROM tb_transferencia WHERE estado = 1";
$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />

    <title>Transferencia</title>
</head>

<body>
    
    <div class="icon-bar">
        <a href="registro.php"><i class="fa fa-registered"></i></a>
        <a href="inicio.php"><i class="fa fa-home"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Transferencia</h2>
    <hr>
    <div class="container">
        <?php
        echo "<table border='1'>
        <tr>
            <th>id_transferencia</th>
		    <th>id_jugador</th>
            <th>id_equipoa</th>
            <th>id_equipod</th> 
            <th>id_contrato</th> 
            <th>id_agente</th> 
            <th>id_liga</th>
            <th>id_posicion</th>      
            <th>id_negociacion</th>      
            <th>monto_transferencia</th>      
            <th>años_contrato</th>      
		    <th>Actualizar</th>
		    <th>Eliminar</th>
        </tr>";
        while ($row = mysqli_fetch_array($result)) {
           
            echo "<tr>";
            echo "<td>" . $row['id_transferencia'] . "</td>";
            echo "<td>" . $row['id_jugador'] . "</td>";
            echo "<td>" . $row['id_equipoa'] . "</td>";
            echo "<td>" . $row['id_equipod'] . "</td>";
            echo "<td>" . $row['id_contrato'] . "</td>";
            echo "<td>" . $row['id_agente'] . "</td>";
            echo "<td>" . $row['id_liga'] . "</td>";
            echo "<td>" . $row['id_posicion'] . "</td>";
            echo "<td>" . $row['id_negociacion'] . "</td>";
            echo "<td>" . $row['monto_transferencia'] . "</td>";
            echo "<td>" . $row['años_contrato'] . "</td>";
            echo "<td><a href='editar9.php?id=" . $row['id_transferencia'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar9.php?id=" . $row['id_transferencia'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";

            echo "</tr>";
        }
        echo "</table>";
       
        ?>



</body>

</html>