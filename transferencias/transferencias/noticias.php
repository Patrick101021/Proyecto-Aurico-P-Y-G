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
<a href="inicio.php">Volver al Inicio</a>



        
    </nav>
    <h1>Noticias Destacadas</h1>

    <?php
   
    $noticia1_titulo = "Un campeon de Europa para el banquillo del Barcelona";
    $noticia1_contenido = "Agente libre tras una complicada etapa en Alemania, Hansi Flick estaría encantado de empezar una nueva aventura en el FC Barcelona, uno de los grandes banquillos que quedan libres a final de temporada. Al ex del Bayern Múnich le apasiona la idea de ir al Barça.";
    $noticia1_imagen = "img/noticia1_imagen.jpg";
 

    
    $noticia2_titulo = "Harry Kane, el señalado de la debacle del Bayern Munich";
    $noticia2_contenido = "Tras 11 años, la dinastía del Bayern de Múnich en la Bundesliga puede terminar. En uno de esos partidos que marcan títulos, el Bayer Leverkusen borró del mapa a los bávaros, con una versión muy pobre de Harry Kane, gran señalado en la derrota de los muniqueses (3-0).";
    $noticia2_imagen = "img/noticia2_imagen.jpg";

    
    $noticia3_titulo = "Los dos Objetivos del Arsenal: Mikel Arteta prepara un mercado XXL";
    $noticia3_contenido = "Buscando grandes refuerzos para dar un paso de gigante en la Premier League, el Arsenal se ha marcado dos grandes objetivos para el mercado de fichajes estival. Los de Mikel Arteta han puesto sus ojos en un delantero top y un extremo de futuro.";
    $noticia3_imagen = "img/noticia3_imagen.jpg"; 

   
    echo "<h2>$noticia1_titulo</h2>";
    echo "<img src='$noticia1_imagen' alt='Imagen Noticia 1'>";
    echo "<p>$noticia1_contenido</p>";
    echo "<form action='leer_mas1.php' method='post'>
        <input type='hidden' name='noticia' value='1'>
        <button type='submit'>Leer más</button>
      </form>";

    echo "<h2>$noticia2_titulo</h2>";
    echo "<img src='$noticia2_imagen' alt='Imagen Noticia 2'>";
    echo "<p>$noticia2_contenido</p>";
    echo "<form action='leer_mas2.php' method='post'>
        <input type='hidden' name='noticia' value='1'>
        <button type='submit'>Leer más</button>
      </form>";

    echo "<h2>$noticia3_titulo</h2>";
    echo "<img src='$noticia3_imagen' alt='Imagen Noticia 3'>";
    echo "<p>$noticia3_contenido</p>";
    echo "<form action='leer_mas3.php' method='post'>
        <input type='hidden' name='noticia' value='1'>
        <button type='submit'>Leer más</button>
      </form>";

   

    ?>
<hr>
<nav>
<a href="cerrar_sesion.php">cerrar_sesion</a>


        
    </nav>
</body>
</html>
