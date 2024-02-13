<?php
include("config.php");
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css">
    <title>Modificar</title>
</head>

<body>
    <!-- Creamos un menu     -->
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="transferencia.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Actualizar</h2>
    <hr />
    <form action="actualizar9.php" method="POST">
        <div class="container">
            <?php
            
            $result = mysqli_query($mysqli,"SELECT * FROM tb_transferencia WHERE id_transferencia =$id");
            while($row = mysqli_fetch_array($result)){
                echo"<input type='hidden' name='id' value='{$row['id_transferencia']}' required>";
                echo"<input type='text' name='id_jugador' value='{$row['id_jugador']}' required>";
                echo"<input type='text' name='id_equipoa' value='{$row['id_equipoa']}' required>";
                echo"<input type='text' name='id_equipod' value='{$row['id_equipod']}' required>";
                echo"<input type='text' name='id_contrato' value='{$row['id_contrato']}' required>";
                echo"<input type='text' name='id_agente' value='{$row['id_agente']}' required>";
                echo"<input type='text' name='id_liga' value='{$row['id_liga']}' required>";
                echo"<input type='text' name='id_posicion' value='{$row['id_posicion']}' required>";
                echo"<input type='text' name='id_negociacion' value='{$row['id_negociacion']}' required>";
                echo"<input type='text' name='monto_transferencia' value='{$row['monto_transferencia']}' required>";
                echo"<input type='text' name='años_contrato' value='{$row['años_contrato']}' required>";
                echo"<div class='clearfix'>";
                echo"<button type='submit' class='signupbtn'>Actualizar</button>";
                echo"</div>";    
            }
            ?>
        </div>
    </form>
</body>

</html>