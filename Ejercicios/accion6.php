<?php
$suma1=0;
$resta1=0;
$multiplica1=0;
$divide1=0;
//hay que iniciar la variables de este modo
//porque xampp a nivel local tira undefined index y declarando
//de este modo logramos que desaparezca el error
$suma='';
$resta='';
$multiplica='';
$divide='';
 

   if(isset($_GET['suma'])){
     $suma1=$_GET['numero1'] + $_GET['numero2'] + $_GET['numero3'] + $_GET['numero4'] + $_GET['numero5'] +
      $_GET['numero6'] + $_GET['numero7'] + $_GET['numero8'] + $_GET['numero9'] + $_GET['numero10'];
     echo "El resultado de la suma es: ". $suma1;   
     echo "<br>"; 
   }
   if(isset($_GET['resta'])){
    $resta1=$_GET['numero1'] - $_GET['numero2'];
    echo "El resultado de la resta es: ".$resta1;    
    echo "<br>";
    }
    if(isset($_GET['multiplica'])){
        $multiplica1=$_GET['numero1'] * $_GET['numero2'];
        echo "El resultado de la multiplicacion es: ".$multiplica1;    
        echo "<br>";
        }
        if(isset($_GET['divide'])){
            $divide1=$_GET['numero1'] * $_GET['numero2'];
            echo "La division es: ". $divide1;   
            }
?>