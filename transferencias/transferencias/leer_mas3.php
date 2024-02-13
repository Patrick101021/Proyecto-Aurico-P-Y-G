<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/mystyle5.css" />
    <title>Noticias Destacadas</title>
</head>
<body>

<nav>
<a href="noticias.php">Volver al Noticias Destacadas</a> 
    </nav>
    <h1>Los dos Objetivos del Arsenal: Mikel Arteta prepara un mercado XXL</h1>
    <h1>Por LLuis Arienzo-11/02-13:35</h1>


    <?php
   $noticia3_imagen = "img/noticia3_imagen.jpg";
    $noticia3_titulo = "Los dos Objetivos del Arsenal: Mikel Arteta prepara un mercado XXL";
    $noticia3_contenido = "Buscando grandes refuerzos para dar un paso de gigante en la Premier League, el Arsenal se ha marcado dos grandes objetivos para el mercado de fichajes estival. Los de Mikel Arteta han puesto sus ojos en un delantero top y un extremo de futuro.
  <hr>  En la órbita del FC Barcelona, Mikel Arteta se autodescartó de la carrera por el banquillo catalán: “Estoy en el sitio correcto, con la gente correcta y me siento muy bien. Como he dicho varias veces, estoy en un bonito viaje con este club, nuestros jugadores, staff, nuestra afición y hay aún mucho que hacer.”
    <hr>A los mandos del Arsenal, la paciencia de la directiva gunner ha pagado con creces. Los londinenses estuvieron varios años construyendo el proyecto deportivo y desde la pasada temporada ya ha dado sus frutos. El Arsenal es uno de los favoritos al título, si bien está aún lejos de Liverpool y, sobretodo, Manchester City.    ";
       
    
    $noticia3_imagen = "img/noticia3_imagen.jpg";
 
    echo "<img src='$noticia3_imagen' alt='Imagen Noticia 3'>";
    echo "<h2>$noticia3_titulo</h2>";
    echo "<p>$noticia3_contenido</p>";
    ?>
<hr>
<nav>
<a href="cerrar_sesion.php">cerrar_sesion</a>