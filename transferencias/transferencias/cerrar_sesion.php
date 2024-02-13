<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/mystyle2.css" />
    <title>cerrar sesion</title>
</head>
<body>
     <form action="inicio_sesion.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="clave">Clave:</label>
        <input type="password" name="clave" required><br>

        <input type="submit" value="Iniciar sesión">
     </form>
</body>
</html>
