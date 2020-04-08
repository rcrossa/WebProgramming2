<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
        require_once "accion4.php";

 ?>
<h1>Ejercicio 1</h1>
       <form action="accion4.php" method="post">
        <label for="number1">Primer Numero:</label><br>
        <input type="number" name="numero1" value="numero1"><br>
        <label for="number2">Segundo numero:</label><br>
        <input type="number" id="lname" name="numero2" value="numero2"><br><br>
        <label for="number3">Potencia (si selecciona la operacion):</label><br>
        <input type="number" id="lname" name="numero3" value="numero3"><br><br>
        <!-- <textarea name="resultado" id="" cols="30" rows="2"></textarea><br> -->
        <!-- <textarea name="resultado" id="" cols="30" rows="2"></textarea><br> -->
         <select id="" name="option">
            <option value="sumar">sumar</option>
            <option value="restar">restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="division">division</option>
            <option value="potencia">potencia</option>
        </select><br><br>
        <p><input type="submit" name="cmdForm" value="enviar"/></p>
       </form>
       <?php
        // require_once "accion4.php";
        
 ?>
</body>
</html>