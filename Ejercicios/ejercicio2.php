<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/archivo.js"></script>
    <title>Document</title>
</head>
<body>

<h1>Ejercicio 3</h1>
       <!-- <form action= method="post"> -->
       <form action="accion4.php" method="post">
        <label for="number1">Numero 1:</label><br>
        <input type="number"  name="numero1" value="numero1"><br>
        <label for="number2">Numero 2:</label><br>
        <input type="number" id="lname" name="numero2" value="numero2"><br>
        <label for="number3">Numero 3:</label><br>
        <input type="number"  name="numero3" value="numero3"><br>
        <label for="number4">Numero 4:</label><br>
        <input type="number" id="lname" name="numero4" value="numero4"><br>
        <label for="number5">Numero 5:</label><br>
        <input type="number"  name="numero5" value="numero5"><br>
        <label for="number6">Numero 6:</label><br>
        <input type="number" id="lname" name="numero6" value="numero6"><br>
        <label for="number7">Numero 7:</label><br>
        <input type="number"  name="numero7" value="numero7"><br>
        <label for="number8">Numero 8:</label><br>
        <input type="number" id="lname" name="numero8" value="numero8"><br>
        <label for="number9">Numero 9:</label><br>
        <input type="number"  name="numero9" value="numero9"><br>
        <label for="number10">Numero 10:</label><br>
        <input type="number"  name="numero10" value="numero10"><br><br>
        <!-- <textarea name="resultado" id="" cols="30" rows="15"></textarea><br> -->
         <select id="option" name="option">
          <option value="promedio">promedio</option>
            <option value="ordenmayormenor">ordenmayormenor</option>
            <option value="ordenmenormayor">ordenmenormayor</option>
            <option value="invertirelordendelosnumeros">invertirelordendelosnumeros</option>
            <option value="buscarelmayoryelmenor">buscarelmayoryelmenor</option>
        </select><br><br>
        <p><input type="submit" value="enviar"/></p>
       </form>
    
</body>
</html>