<?php
// //creo el json con el dato del formulario
// $file= 'archivo.json';
// //agregando elementos
// array_push($_POST,105,"diez");
// //codifico
// $json_string=json_encode($_POST);
// file_put_contents($file,$json_string. PHP_EOL, FILE_APPEND);

 
// foreach ($_POST as $key => $value) {
//     echo "<pre>";
//     echo "El valor de " . $key . "es: " . $value;
//     echo "</pre>";
// }


//---------------------------------
 
?>
<?php
echo "-----------";
$sumar=0;
 $resta=0;
 $multiplicacion=0;
 $division=0;
 $resultado=0;



if(!empty($_POST)){
echo "test";

        switch ($_POST['option']) {
              case 'sumar':
              $sumar=$_POST["numero1"]+$_POST["numero2"];
              
              echo "El valor de la suma es: ".$sumar;
              break;
              case 'resta':
              // $restar=$_POST["numero1"] - $_POST["numero2"];
              echo "El valor de la resta es: ".$resta;
              break;
              case 'multiplicar':
              // $multiplicar=$_POST["numero1"] * $_POST["numero2"];
              echo "El valor es: ".$multiplicacion;
              break;
              case 'division':
              // $division=$_POST["numero1"] / $_POST["numero2"];
              echo "El valor es: ".$division;
              break;
              default:
                # code...
                break;
              }
            }
        // }

var mensaje = ""

?>