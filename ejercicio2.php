<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/archivo.js"></script>
    <title>Document</title>
</head>
<body>

<?php

$promedio=0;
 $ordenarmayormenor=0;
 $multiplicacion=0;
 $division=0;
 $resultado=0;

if(!empty($_POST)){
echo "test";
        switch ($_POST['option']) {
              case 'promedio':
              $promedio=$_POST["numero1"]+$_POST["numero2"]+$_POST["numero3"]+$_POST["numero4"]+$_POST["numero5"]+$_POST["numero6"]+$_POST["numero7"]+$_POST["numero8"]+$_POST["numero9"]+$_POST["numero10"]/10;
              $resultado=$promedio;
              break;
              case 'ordenarmayormenor':
                foreach ($ordenarmayo as $key => $value) {
                  echo "<pre>";
                  echo "El valor de " . $key . "es: " . $value;
                  echo "</pre>";
                }
              $ordenarmayormenor= asort($_POST);
              $resultado=$ordenarmayormenor;
             
              break;
              case 'multiplicar':
               $multiplicar=$_POST["numero1"] * $_POST["numero2"];
              $resultado=$multiplicar;
            
              break;
              case 'division':
               $division=$_POST["numero1"] / $_POST["numero2"];
              $resultado=$division;
              break;
              default:
                # code...
                break;
              }
            }

?>
<h1>Ejercicio 3</h1>
       <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <label for="number1">Numero 1:</label><br>
        <input type="number"  name="numero1" value="number1"><br>
        <label for="number2">Numero 2:</label><br>
        <input type="number" id="lname" name="numero2" value="number2"><br>
        <label for="number3">Numero 3:</label><br>
        <input type="number"  name="numero3" value="number3"><br>
        <label for="number4">Numero 4:</label><br>
        <input type="number" id="lname" name="numero4" value="number4"><br>
        <label for="number5">Numero 5:</label><br>
        <input type="number"  name="numero5" value="number5"><br>
        <label for="number6">Numero 6:</label><br>
        <input type="number" id="lname" name="numero6" value="number6"><br>
        <label for="number7">Numero 7:</label><br>
        <input type="number"  name="numero7" value="number7"><br>
        <label for="number8">Numero 8:</label><br>
        <input type="number" id="lname" name="numero8" value="number8"><br>
        <label for="number9">Numero 9:</label><br>
        <input type="number"  name="numero9" value="number9"><br>
        <label for="number10">Numero 10:</label><br>
        <input type="number"  name="numero10" value="number10"><br><br>
        <textarea name="resultado" id="" cols="30" rows="15"><?php echo "".$resultado?></textarea><br>
         <select id="option" name="option">
          <option value="sumar">promedio</option>
            <option value="resta">ordenmayormenor</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="division">division</option>
        </select>
        <p><input type="submit" value="enviar"/></p>
       </form>
    
</body>
</html>