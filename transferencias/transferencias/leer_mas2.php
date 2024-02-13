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
    <h1>Harry kane, señalado Por el Debacle del Bayern Munich</h1>
    <h1>Por LLuis Arienzo-11/02-13:45</h1>


    <?php
   $noticia2_imagen = "img/noticia2_imagen.jpg";
    $noticia2_titulo = "Harry Kane, Señalado Por el Debacle del Bayern Munich";
    $noticia2_contenido = "Tras 11 años, la dinastía del Bayern de Múnich en la Bundesliga puede terminar. En uno de esos partidos que marcan títulos, el Bayer Leverkusen borró del mapa a los bávaros, con una versión muy pobre de Harry Kane, gran señalado en la derrota de los muniqueses (3-0).
  <hr>  El delantero inglés tiró de autocrítica tras el encuentro: “No jugamos bien. Especialmente en la primera mitad e incluso en la segunda, los presionamos bien, pero cada vez que recuperamos el balón se lo devolvimos directamente. Eso les permitió ganar impulso. En el último tercio no estuvimos bien en el uno contra uno, no fuimos buenos en los duelos, la entrega final no estuvo hoy, así que fue un día realmente decepcionante”.
    <hr>No obstante, el ex del Tottenham confía en poder hacerse con el título liguero: “Estamos cinco puntos por detrás pero aún quedan muchos partidos por delante. Esto duele, queríamos un resultado diferente. Quedan muchos partidos por jugar y tenemos que intentar sumar tantos puntos como podamos, lo más rápido que podamos.”";
       
    
    $noticia2_imagen = "img/noticia2_imagen.jpg";
 
    echo "<img src='$noticia2_imagen' alt='Imagen Noticia 2'>";
    echo "<h2>$noticia2_titulo</h2>";
    echo "<p>$noticia2_contenido</p>";
    ?>
<hr>
<nav>
<a href="cerrar_sesion.php">cerrar_sesion</a>


        
    </nav>
</body>
</html>