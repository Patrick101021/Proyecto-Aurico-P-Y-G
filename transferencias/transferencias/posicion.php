<?php
include("config.php");
$query = "SELECT * FROM tb_posicion WHERE estado = 1";
$result = mysqli_query($mysqli, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />

    <title>Posicion</title>
</head>

<body>
    
    <div class="icon-bar">
        <a href="registro.php"><i class="fa fa-registered"></i></a>
        <a href="inicio.php"><i class="fa fa-home"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Posicion</h2>
    <hr>
    <div class="container">
        <?php
        echo "<table border='1'>
        <tr>
            <th>id_posicion</th>
		    <th>nombre_posicion</th>    
		    <th>Actualizar</th>
		    <th>Eliminar</th>
        </tr>";
        while ($row = mysqli_fetch_array($result)) {
           
            echo "<tr>";
            echo "<td>" . $row['id_posicion'] . "</td>";
            echo "<td>" . $row['nombre_posicion'] . "</td>";

            echo "<td><a href='editar8.php?id=" . $row['id_posicion'] . "'><img src='./images/icons8-Edit-32.png' alt='Edit'></a></td>";
            echo "<td><a href='eliminar8.php?id=" . $row['id_posicion'] . "'><img src='./images/icons8-Trash-32.png' alt='Delete'></a></td>";

            echo "</tr>";
        }
        echo "</table>";
       
        ?>



</body>

</html>