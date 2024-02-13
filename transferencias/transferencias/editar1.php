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
        <a href="jugador.php"><i class="fa fa-user"></i></a>
    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Actualizar</h2>
    <hr />
    <form action="actualizar1.php" method="POST">
        <div class="container">
            <?php
            
            $result = mysqli_query($mysqli,"SELECT * FROM tb_jugador WHERE id_jugador =$id");
            while($row = mysqli_fetch_array($result)){
                echo"<input type='hidden' name='id' value='{$row['id_jugador']}' required>";
                echo"<input type='text' name='nombre' value='{$row['nombre']}' required>";
                echo"<input type='text' name='apellido' value='{$row['apellido']}' required>";
                echo"<input type='text' name='nacimiento' value='{$row['nacimiento']}' required>";
                echo"<input type='text' name='nacionalidad' value='{$row['nacionalidad']}' required>";
                echo"<input type='text' name='posicion' value='{$row['posicion']}' required>";
                echo"<input type='text' name='pie_dominante' value='{$row['pie_dominante']}' required>";

                echo"<div class='clearfix'>";
                echo"<button type='submit' class='signupbtn'>Actualizar</button>";
                echo"</div>";    
            }
            ?>
        </div>
    </form>
</body>

</html>