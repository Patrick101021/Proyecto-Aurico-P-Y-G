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
    <h1>Un campeón de Europa para el banquillo del FC Barcelona</h1>
    <h1>Por LLuis Arienzo-11/02-14:19</h1>


    <?php
   $noticia1_imagen = "img/noticia1_imagen.jpg";
    $noticia1_titulo = "Un campeon de Europa para el banquillo del Barcelona";
    $noticia1_contenido = "Agente libre tras una complicada etapa en Alemania, Hansi Flick estaría encantado de empezar una nueva aventura en el FC Barcelona, uno de los grandes banquillos que quedan libres a final de temporada. Al ex del Bayern Múnich le apasiona la idea de ir al Barça.
  <hr>  “Yo puedo opinar de entrenadores que he tenido como jugador 
    y otros que voy siguiendo pero para hacer un análisis 
    hay que tener más datos y profundizar más. 
    Queremos el mismo perfil de hoy. 
    Alguien que sea capaz de adaptarse a las necesidades del club, 
    que se adapte y confíe en jugadores jóvenes que crecen, que no podremos hacer grandes fichajes, que haya un equilibrio de plantilla. Necesitamos 
    un entrenador que sepa lo que es el Barça y entienda nuestra realidad actual.”
    <hr>Preguntado sobre el perfil de entrenador que puede llegar al FC Barcelona, 
    Deco dejó claro que las características que el futuro técnico del Barça tendrá que cumplir. 
    Así pues, parece que los futuribles del banquillo culé tendrán que pasar por un aro muy estrecho. 
    Algo que a Hansi Flick no le importaría cumplir.";
       
    
    $noticia1_imagen = "img/noticia1_imagen.jpg";
 
    echo "<img src='$noticia1_imagen' alt='Imagen Noticia 1'>";
    echo "<h2>$noticia1_titulo</h2>";
    echo "<p>$noticia1_contenido</p>";
    ?>
<hr>
<nav>
<a href="cerrar_sesion.php">cerrar_sesion</a>


        
    </nav>
</body>
</html>