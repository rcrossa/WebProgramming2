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
 
// 

// <form action="<?php echo $_SERVER['PHP_SELF'] " method="post"> 
// echo "-----------";

 $resultado=0;
 $resultado2=0;
 
  $sumar=0;
  $resta=0 ;
  $multiplicar=0;
  $dividir=0;
  $potencia=0;
  $potencia2=0;             


if(isset($_POST['option']) && !empty($_POST['numero1']) && !empty($_POST['numero2'])){
    $opcion=$_POST['option'];
    
                          switch ($opcion) {
                            case 'sumar':
                              $resultado=$_POST['numero1'] + $_POST['numero2'];
                              echo "El resultado es: ".$resultado;
                              break;
                            case 'restar':
                              $restar=$_POST['numero1'] - $_POST['numero2'];
                              echo "El resultado es: ".$restar;
                              break;
                            case 'multiplicar':
                              $resultado=$_POST["numero1"] * $_POST["numero2"]; 
                              echo "El resultado es: ".$resultado;
                              break;
                            case 'division':
                              $resultado=$_POST["numero1"] / $_POST["numero2"];
                              echo "El resultado es: ".$resultado;
                             break;
                            case 'potencia':
                              $resultado= pow( $_POST['numero1'], $_POST["numero3"]);
                              $resultado2= pow($_POST['numero2'],$_POST["numero3"]);
                              echo "El resultado es: ".$resultado;
                              echo "</br>";
                              echo "El resultado es: ".$resultado2;
                            break;
                            case 'promedio':
                                  $resultado= $_POST["numero1"]+$_POST["numero2"]+$_POST["numero3"]+$_POST["numero4"]+$_POST["numero5"]+$_POST["numero6"]+$_POST["numero7"]+$_POST["numero8"]+$_POST["numero9"]+$_POST["numero10"];
                                  $resultado=$resultado / 10;
                                  echo "El promedio es: ".$resultado;
                              break;
                            case 'ordenmayormenor':
                              arsort($_POST);
                                    foreach ($_POST as $value) {
                                      echo "<pre>";
                                      echo "El valor es: " . $value;
                                      echo "</pre>";
                                    }
                              break;
                              case 'ordenmenormayor':
                                asort($_POST);
                                foreach ($_POST as $value) {
                                  echo "<pre>";
                                  echo "El valor es: " . $value;
                                  echo "</pre>";
                                }
                                break;
                            case 'invertirelordendelosnumeros':
                                  ksort($_POST);
                                  foreach ($_POST as $value) {
                                    echo "<pre>";
                                    echo "El valor es: " . $value;
                                    echo "</pre>";
                                  }
                              break;
                            case 'buscarelmayoryelmenor':
                              echo "El mayor es: ". max($_POST["numero1"],$_POST["numero2"],$_POST["numero3"],$_POST["numero4"],$_POST["numero5"],$_POST["numero6"],$_POST["numero7"],$_POST["numero8"],$_POST["numero9"],$_POST["numero10"]);
                              echo "</br>";
                              echo "El menor es: ". min($_POST["numero1"],$_POST["numero2"],$_POST["numero3"],$_POST["numero4"],$_POST["numero5"],$_POST["numero6"],$_POST["numero7"],$_POST["numero8"],$_POST["numero9"],$_POST["numero10"]);
                              break;
                            case 'sumar':
                              echo "sumar";
                              break;
                            default:
                            break;
                            }
  
                            
                  } elseif (isset($_POST['option']) && isset($_REQUEST['numero1']) && isset($_REQUEST['numero2'])){
                                              if (isset($_REQUEST['suma'])) {
                                                $sumar=$_POST["numero1"] + $_POST["numero2"];
                                                echo "El resultado de la suma es: ".$sumar;
                                                echo "<br>";
                                              }elseif (isset($_REQUEST['resta'])) {
                                                $restar=$_POST['numero1'] - $_POST['numero2'];
                                                echo "El resultado de la suma es: ".$restar;
                                                echo "<br>";
                                              }elseif (isset($_REQUEST['multiplica'])) {
                                                $multiplicar=$_POST["numero1"] * $_POST["numero2"];
                                                echo "El resultado de la multiplicacion es: ".$multiplicar;
                                                echo "<br>";                                  
                                              }elseif (isset($_REQUEST['divide'])) {
                                                $dividir=$_POST["numero1"] / $_POST["numero2"];
                                                echo "El resultado de la division es: ".$dividir; 
                                                echo "<br>"; 
                                              }elseif (isset($_REQUEST['potencia'])) {
                                                          $potencia= pow( $_POST['numero1'], $_POST["numero3"]);
                                                          $potencia2= pow($_POST['numero2'],$_POST["numero3"]);
                                                          echo "Potencia numero 1 : ".$potencia;
                                                          echo "</br>";
                                                          echo "Potencia numero 2 : ".$potencia2;
                                              }else {
                                                echo "no hay opcion selecionada";
                                                  }
                                            }else{
                                              echo "no hay opcion selecionada o datos completos";
                                            }
                            
?>