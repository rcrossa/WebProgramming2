<?php
$suma1=0;
$resta1=0;
$multiplica1=0;
$divide1=0;
$potencia1=0;
$potencia2=0;
$potencia3=0;
$potencia4=0;
$potencia5=0;
$potencia6=0;
$potencia7=0;
$potencia8=0;
$potencia9=0;
$potencia10=0;

//hay que iniciar la variables de este modo
//porque xampp a nivel local tira undefined index y declarando
//de este modo logramos que desaparezca el error
// $suma='';
// $resta='';
// $multiplica='';
// $divide='';
 

   if(isset($_GET['suma'])){
     $suma1=$_GET['numero1'] + $_GET['numero2'] + $_GET['numero3'] + $_GET['numero4'] + $_GET['numero5'] +
      $_GET['numero6'] + $_GET['numero7'] + $_GET['numero8'] + $_GET['numero9'] + $_GET['numero10'];
     echo "El resultado de la suma es: ". $suma1;   
     echo "<br>"; 
   }
   if(isset($_GET['resta'])){
    $resta1=$_GET['numero1'] - $_GET['numero2'] - $_GET['numero3'] - $_GET['numero4'] - $_GET['numero5'] -
    $_GET['numero6'] - $_GET['numero7'] - $_GET['numero8'] - $_GET['numero9'] - $_GET['numero10'];
    echo "El resultado de la resta es: ".$resta1;    
    echo "<br>";
    }
    if(isset($_GET['multiplica'])){
        $multiplica1=$_GET['numero1'] * $_GET['numero2'] * $_GET['numero3'] * $_GET['numero4'] * $_GET['numero5'] *
        $_GET['numero6'] * $_GET['numero7'] * $_GET['numero8'] * $_GET['numero9'] * $_GET['numero10'];
        echo "El resultado de la multiplicacion es: ".$multiplica1;    
        echo "<br>";
        }
        if(isset($_GET['divide'])){
            $divide1=$_GET['numero1'] / $_GET['numero2'] / $_GET['numero3'] / $_GET['numero4'] / $_GET['numero5'] /
            $_GET['numero6'] / $_GET['numero7'] / $_GET['numero8'] / $_GET['numero9'] / $_GET['numero10'];
            echo "La division es: ". $divide1;   
            }
            if(isset($_GET['potencia'])){
              $potencia1=pow($_GET['numero1'],$_GET['numero11']);
              $potencia2=pow($_GET['numero2'],$_GET['numero11']); 
              $potencia3=pow($_GET['numero3'],$_GET['numero11']);
              $potencia4=pow($_GET['numero4'],$_GET['numero11']);
              $potencia5=pow($_GET['numero5'],$_GET['numero11']);
              $potencia6=pow($_GET['numero6'],$_GET['numero11']);
              $potencia7=pow($_GET['numero7'],$_GET['numero11']);
              $potencia8=pow($_GET['numero8'],$_GET['numero11']);
              $potencia9=pow($_GET['numero9'],$_GET['numero11']);
              $potencia10=pow($_GET['numero10'],$_GET['numero11']);
              
              echo " Potencia del numero es 1: ". $potencia1; 
              echo "<br>";
              echo " Potencia del numero es 2: ". $potencia2; 
              echo "<br>";
              echo " Potencia del numero es 3: ". $potencia3; 
              echo "<br>";
              echo " Potencia del numero es 4: ". $potencia4; 
              echo "<br>";
              echo " Potencia del numero es 5: ". $potencia5; 
              echo "<br>";
              echo " Potencia del numero es 6: ". $potencia6; 
              echo "<br>";
              echo " Potencia del numero es 7: ". $potencia7; 
              echo "<br>";
              echo " Potencia del numero es 8: ". $potencia8; 
              echo "<br>";
              echo " Potencia del numero es 9: ". $potencia9; 
              echo "<br>";
              echo " Potencia del numero es 10: ". $potencia10; 
              echo "<br>";
              }
            
?>