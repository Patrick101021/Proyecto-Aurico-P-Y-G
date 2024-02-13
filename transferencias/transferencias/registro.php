<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle1.css" />
    <link rel="stylesheet" type="text/css" href="css/mystyle3.css" />
    <link rel="stylesheet" type="text/css" href="css/mystyle4.css" />


    <title>Ingresar Datos</title>
</head>
<body>
    
    
    <div class="icon-bar">
        <a href="inicio.php"><i class="fa fa-home"></i></a>
        <a href="jugador.php"><i class="fa fa-user"></i></a>
        <a href="agente.php"><i class="fa fa-user"></i></a>
        <a href="contrato.php"><i class="fa fa-user"></i></a>
        <a href="liga.php"><i class="fa fa-user"></i></a>
        <a href="equipoa.php"><i class="fa fa-user"></i></a>
        <a href="equipod.php"><i class="fa fa-user"></i></a>
        <a href="negociacion.php"><i class="fa fa-user"></i></a>
        <a href="posicion.php"><i class="fa fa-user"></i></a>
        <a href="transferencia.php"><i class="fa fa-user"></i></a>





    </div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

    <h2>Jugadores</h2>
    <hr>

    <form action="guardar1.php" method="POST">
        <div class="container">
            <input type="text" name="nombre" required>
            <input type="text" name="apellido" required>
            <input type="text" name="nacimiento" required>
            <input type="text" name="nacionalidad" required>
            <input type="text" name="posicion" required>
            <input type="text" name="pie_dominante" required>
            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar Informacion</button>
            </div>
        </div>
    </form>


    <h2>Agente</h2>
    <hr>

    <form action="guardar2.php" method="POST">
        <div class="container">
            <input type="text" name="nombre_agente" required>
            <input type="text" name="nacionalidad" required>
            <input type="text" name="comision" required>
            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar Informacion</button>
            </div>
        </div>
    </form>

    <h2>Contrato</h2>
    <hr>

    <form action="guardar3.php" method="POST">
        <div class="container">
            <input type="text" name="inicio_contrato" required>
            <input type="text" name="fin_contrato" required>
            <input type="text" name="salario" required>
            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar Informacion</button>
            </div>
        </div>
    </form>


    <h2>Liga</h2>
    <hr>

    <form action="guardar4.php" method="POST">
        <div class="container">
            <input type="text" name="nombre_liga" required>
            <input type="text" name="pais" required>
            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar Informacion</button>
            </div>
        </div>
    </form>

    <h2>Equipo Actual</h2>
    <hr>

    <form action="guardar5.php" method="POST">
        <div class="container">
            <input type="text" name="nombre_equipo" required>
            <input type="text" name="pais" required>
            <input type="text" name="liga" required>

            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar Informacion</button>
            </div>
        </div>
    </form>


    <h2>Equipo Destino</h2>
    <hr>

    <form action="guardar6.php" method="POST">
        <div class="container">
            <input type="text" name="nombre_equipo" required>
            <input type="text" name="pais" required>
            <input type="text" name="liga" required>

            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar Informacion</button>
            </div>
        </div>
    </form>


    <h2>Negociacion</h2>
    <hr>

    <form action="guardar7.php" method="POST">
        <div class="container">
            <input type="text" name="bonus" required>

            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar Informacion</button>
            </div>
        </div>
    </form>


    <h2>Posicion</h2>
    <hr>

    <form action="guardar8.php" method="POST">
        <div class="container">
            <input type="text" name="nombre_posicion" required>

            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar Informacion</button>
            </div>
        </div>
    </form>

    <h2>Transferencia</h2>
    <hr>

    <form action="guardar9.php" method="POST">
        <div class="container">
            <input type="text" name="id_jugador" required>
            <input type="text" name="id_equipoa" required>
            <input type="text" name="id_equipod" required>
            <input type="text" name="id_contrato" required>
            <input type="text" name="id_agente" required>
            <input type="text" name="id_liga" required>
            <input type="text" name="id_posicion" required>
            <input type="text" name="id_negociacion" required>
            <input type="text" name="monto_transferencia" required>
            <input type="text" name="años_contrato" required>


            <div class="clearfix">
                <button type="submit" class="signupbtn">Guardar Informacion</button>
            </div>
        </div>
    </form>

    <nav>
        <a href="cerrar_sesion.php">cerrar_sesion</a>
        <a href="noticias.php">noticias</a>
    </nav>



</body>
</html>