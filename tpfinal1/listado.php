<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Roberto, Natalia, Franco, Camila">
    <meta name="copyright" content="Roberto, Natalia, Franco, Camila">
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
      <div class="container-fluid">
              <div class="row">
                    <div class="col-xs-12">
                            <div class="sort-by-container">
                              <label for="sort"
                                class="filter-by-sort col-md-3 col-sm-12 col-xs-12 clear font-weight-normal">Ordenar
                                por:</label>
                                <div class="col-md-3 col-sm-12 col-xs-12 clear">
                                    <select id="sort" class="sort-by">
                                        <option value=" "></option>
                                        <option value=" ">accion</option>
                                        <option value=" ">aventura</option>
                                        <option value=" ">estrategia</option>
                                        <option value=" ">otros</option>
                                        
                                      </select>
                                </div>
                            </div>
                            <div class="sort-by-container">
                              <label for="sort"
                                class="filter-by-sort col-md-3 col-sm-12 col-xs-12 clear font-weight-normal">Ordenar
                                por:</label>
                                <div class="col-md-3 col-sm-12 col-xs-12 clear">
                                    <select id="sort" class="sort-by">
                                        <option value=""></option>
                                        <option value="">Marca 1</option>
                                        <option value="">Marca 2</option>
                                        <option value="">Marca 3</option>
                                        <option value="">Marca 4</option>
                                      </select>
                                </div>
                            </div>
                            <div class="productos-detalles">
                                  <div>
                                    <img src="images/fifa20.jpg" alt="fifa"  style="width:280px;height:180px">
                                    <a href="images/fifa20.jpg" ></a>
                                  </div>
                            </div>
                    
                    </div>
              </div>
      </div>
    <!-- JavaScript -->
    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

<!-- <form class="col-md-2 col-lg-2 col-xl-2 mb-4 Consulta-producto" action="accion4.php" method="post">
<label for="number1">Juego:</label><br>
<input type="number" name="numero1" value="numero1"><br><br> -->


<!-- <textarea name="resultado" id="" cols="30" rows="2"></textarea><br> -->
<!-- <textarea name="resultado" id="" cols="30" rows="2"></textarea><br> -->
<!-- <select id="" name="option">
    <option value=""></option>
    <option value="accion">accion</option>
    <option value="carreras">Carreras</option>

</select><br><br>
<p><input type="submit" name="cmdForm" value="consultar" /></p>
</form> -->