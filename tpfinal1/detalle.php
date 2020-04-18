<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <!--
    * La etiqueta de Viewport es obligatoria-
    * Le indica al browser que en todos los dipositivos
    * vamos a usar el 100% de la pantalla disponible
    * evitando posibles problemas de zoom
    !-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Roberto, Natalia, Franco, Camila">
  <meta name="copyright" content="Roberto, Natalia, Franco, Camila">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="lib/bootstrap/css/all.min.css">
  <link rel="stylesheet" href="estilos/estilos.css">
  <link
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>VIDEOJUEGOS STORE</title>
</head>

<body>

<?php 
  require_once "archivosphp/encabezado.php";
?>

  <!--NOMBRE JUEGO SELECCIONADO-->
  <section class="Nombre">
    <div class="container">
      <div class="row">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10">
        <h3>NOMBRE DEL JUEGO</h3>
        <h3>
        <div>fecha de lanzamiento | 
          <div class="ec-stars-wrapper">
	        <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
	        <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
    	    <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
	        <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
	        <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
          </div>
          <noscript>Necesitas tener habilitado javascript para poder votar</noscript>
          </div>
          </h3>
        </div>
      </div>
    </div>
  </section>

  <!--Control de Slides-->
  <section>
    <div class="container">
      <div id="CarruselControl" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#CarruselControl" data-slide-to="0" class="active"></li>
          <li data-target="#CarruselControl" data-slide-to="1"></li>
          <li data-target="#CarruselControl" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="#!"><img class="d-block w-100 img-fluid" id="slide" src="images/MASVENDIDOS.jpg"
                alt="Juegos Mas Vendidos" width="1920" height="800"></a>
          </div>
          <div class="carousel-item">
            <a href="#!"><img class="d-block w-100 img-fluid" id="slide_dos" src="images/NUEVOSLANZAMIENTOS.jpg"
                alt="Nuevos lanzamientos" width="1920" height="800"></a>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 img-fluid" id="slide_tres" src="images/SLIDE3.jpg" alt="Tercer Slide" width="1920"
              height="270">
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
      <div class="row">
        <div class="col-10 col-sm-10 col-md-10 col-lg-10">
          <div id="game_area_description" class="game_area_description">
							<h2>Acerca de este juego</h2>
              <br><br>
              <strong>El grupo unido jamás será vencido</strong><br>
              Alíate con un compañero de la IA o con un amigo en el multijugador cooperativo y aventuraos en un mundo de
              destrucción en esta experiencia narrativa de mazmorras. Usad vuestra fuerza combinada para coordinar 
              vuestras acciones y defenderos de ataques sorpresa o enfrentaros a poderosos enemigos.<br><br>
              <strong>A mayor desafío, mayor recompensa</strong><br>
              Adquiere nuevo equipo, sube de nivel a tu personaje y vuélvete más fuerte para alzarte contra los Perdidos.
              Los desafíos de CODE VEIN harán que todos vuelvan a por más, desde nuevos jugadores hasta veteranos con 
              experiencia en juegos de acción.<br><br>
              <strong>Personaliza a tu resucitado</strong><br>
              Elige entre distintas armas como bayonetas, hachas, lanzas y más. Potencia las habilidades de tu personaje con 
              poderosas mejoras de código de sangre. Estas mejoras dan acceso a diferentes "dones" que pueden aumentar tu 
              fuerza, debilitar a los enemigos y que te permiten usar nuevas capacidades de armas o acceder a potentes ataques.
              Acaba con tus oponentes con tu velo de sangre, poderosas herramientas que drenan sangre. Cada una cuenta con su 
              propio estilo visual y de ataque, por lo que ofrecen una infinidad de nuevas estrategias de combate.<br><br>
              Forma equipo y embárcate en un viaje a los confines del infierno para descubrir tu pasado y escapar de una 
              verdadera pesadilla en CODE VEIN. Quizá creas que la muerte es para siempre, pero tu equipo no tiene por qué 
              serlo. Cambia la clase de tu personaje en cualquier momento, desbloquea la capacidad de mezclar y combinar 
              habilidades o elige a diferentes PNJ como compañeros.
              Todo esto puede marcar la diferencia entre vivir o morir.<br><br>			
          </div>

          <form action="" method="POST">
            <label> Name: 
            <input type="text" name="Name" class="Input" style="width: 225px" required>
            </label>
            <br><br>
            <label> Comment: <br>
            <textarea name="Comment" class="Input" style="width: 300px" required></textarea>
            </label>
            <br><br>
            <input type="submit" name="Submit" value="Submit Comment" class="Submit">
          </form>  
          <?php
 
 if($_POST['Submit']){
  print "<h3>Your comment has been submitted!</h3>";

  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];

  #Get old comments
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 1024);

  #Delete everything, write down new and old comments
  $write = fopen("comments.txt", "w+");
  $string = "<b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 #Read comments
 $read = fopen("comments.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 fclose($read);
 ?>            
            
          </div>
        </div>
    </div>
  

 <body>

  

 </body>




  <?php 
 /* require_once "archivosphp/titulodetalle.php"; */
 /* require_once "archivosphp/slidedetalle.php"; */
  require_once "archivosphp/footer.php";
  ?>

  <!-- JavaScript -->
  <script src="lib/jquery/jquery-3.3.1.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>