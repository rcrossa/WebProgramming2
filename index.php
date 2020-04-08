<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>


</head>
<body>

  
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" href="#home">Ejercicio 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu1">Ejercicio 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu2">Ejercicio 3</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#menu3">Ejercicio 4</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content border mb-3">
    <div id="home" class="container tab-pane active"><br>
     <h3>Ejercicio 1</h3>
      <p><?php require_once "ejercicio1.php"; ?></p>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Ejercicio 2</h3>
      <p><?php require_once "ejercicio2.php"; ?></p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Ejercicio 3</h3>
      <p><?php require_once "ejercicio3.php"; ?>.</p>
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <h3>Ejercicio 4</h3>
      <p><?php require_once "ejercicio4.php";?>.</p>
    </div>
  </div>


<script>
$(document).ready(function(){
  $(".nav-tabs a").click(function(){
    $(this).tab('show');
  });
  $('.nav-tabs a').on('shown.bs.tab', function(event){
    var x = $(event.target).text();         // active tab
    var y = $(event.relatedTarget).text();  // previous tab
    $(".act span").text(x);
    $(".prev span").text(y);
  });
});
</script>


</body>
</html>