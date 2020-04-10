<?php

//creo el json si no fue creado
$file= 'archivo.json';

//array de ejemplo recibido
$post =["java","44"];
//defino variable
$a1=0;
$java;
$java1=0;
$voto;
$c=array();
echo "----------------";
//recorro
foreach ($post as $key => $value) {
    echo "<pre>";
    echo "El valor es " . $key . " es : " . $value;
    echo "</pre>";
}
echo "<br>";
echo "----------------";
echo "<br>";
echo "extraigo los datos del array post";
echo "<br>";

extract($post);
echo "\$java = $post[0] \$java1=$post[1]";
// $java=$post[0];
// $java2=$post[1];
echo "<br>";
echo "----------------";
echo "<br>";

//obtengo el contenido
$json_string=file_get_contents($file);
//decodifico
$a=json_decode($json_string);
// extraigo la y separo los datos del archivo

// extract($a);
//  echo "\$a1 =$a[0]";
//  $a1 =$a[0]+$java1;

// echo "<br>";

// //imprimo los dos datos juntos
// echo " java: ".$java." tiene ". " voto: ".$a1;
// echo "<br>";
// echo "----------------";
// echo "<br>";
$c=array_push($java,'$java1');
//sumo y junto los datos en un nuevo array
// $d=$java+$a1;
// echo"".$d;
// $java1=array("java","voto");
// $c=array_combine("$java","$java2","$a1");
// print_r($c);
// $c=array_combine($java1,$d);

// $json_string= ["java","voto"];
// $a=array_combine($java1,$c);
print_r($c);

// //codifico el array
$json_string=json_encode($c);
// //guardo en el archivo json
file_put_contents($file,$c. PHP_EOL,FILE_APPEND);

//codifico el array
// $json_string1=json_encode($c);
//guardo en el archivo json
// file_put_contents($file,$json_string1. PHP_EOL);
echo "<br>";
echo "----------------";
echo "<br>";
echo "obtengo el contenido del archivo";
echo "<br>";
echo "----------------";
echo "<br>";

//obtengo el contenido
$json_string1=file_get_contents($file);
//decodifico e imprimo
var_dump(json_decode($json_string1));
// echo "".
// echo "".$datos;
// echo "<br>";
// print_r($json_string);
echo "<br>";
echo "----------------------------";
echo "<br>";


 
            

?>