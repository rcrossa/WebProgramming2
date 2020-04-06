<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

 $resultado=0;
 $resultado2=0;
//  $potencia=$_POST['numero3'];

if(!empty($_POST)){

        switch ($_POST['option']) {
              case 'sumar':
              $resultado=$_POST["numero1"]+$_POST["numero2"];
              break;
              case 'resta':
                $resultado=$_POST["numero1"]-$_POST["numero2"];
              break;
              case 'multiplicar':
                $resultado=$_POST["numero1"] * $_POST["numero2"];
              break;
              case 'division':
                $resultado=$_POST["numero1"] / $_POST["numero2"];
              break;
              case 'potencia':
                $resultado= pow( $_POST['numero1'], $_POST["numero3"]);
                $resultado2= pow($_POST['numero2'],$_POST["numero3"]);
              break;
              default:
                echo "No selecciono ninguna operacion";
                break;
              }
            }else{
              echo "no selecciono ninguna opcion";
            }
  ?>
<h1>Ejercicio 3</h1>
       <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="number1">Primer Numero:</label><br>
        <input type="number"  name="numero1" value="number1"><br>
        <label for="number2">Segundo numero:</label><br>
        <input type="number" id="lname" name="numero2" value="number2"><br><br>
        <label for="number3">Potencia (si selecciona la operacion):</label><br>
        <input type="number" id="lname" name="numero3" value="number2"><br><br>
        <textarea name="resultado" id="" cols="30" rows="2"><?php echo "Resultado 1: ".$resultado; echo "\nResultado 2: ".$resultado2;?> </textarea><br>
         <select id="option" name="option">
         <option value=""></option>
          <option value="sumar">sumar</option>
            <option value="resta">resta</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="division">division</option>
            <option value="potencia">potencia</option>
        </select>
        <p><input type="submit"  value="enviar"/></p>
       </form>
    
</body>
</html>