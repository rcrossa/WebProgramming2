<?php

//creo el json si no fue creado
$file= 'archivo.json';

//array de ejemplo recibido
$post =['java',"1"];
//defino variable
$a1=0;
$java;
$java1=0;
$voto;
$voto1=array();
$c=array();
$votoextraido;
$a=array();
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
echo "\$java=$post[0] \$voto=$post[1]";
echo "<br>";
echo "---------------";
echo "<br>";
echo "asigno las posiciones del array a variables";
$java=$post[0];
echo "<br>";
$voto=$post[1];
echo "imprimo juego: ".$java." ,imprimo voto: ".$voto;
echo "<br>";
echo "prueba ok";
echo "<br>";
echo "<br>";
echo "----------------";
echo "<br>";
//obtengo el contenido
$json_string=file_get_contents($file);
//decodifico
$voto1=json_decode($json_string);

echo "imprimo lo que esta dentro los valores del archivo";
echo "<br>";
foreach ($voto1 as $key =>$votoextraido) {
    print_r($votoextraido);
}
 echo "<br>"."<br>";
 echo "compruebo que la variable tenga valor";
echo "<br>";
 echo "".$votoextraido;
 echo "<br>";
echo "<br>";
//asigno los datos a un array

echo  "sumo el voto extraido y el del array post";
$voto=$voto+$votoextraido;
echo "<br>";
echo "valor de voto del extraido del json es: ".$votoextraido;
echo "<br>";
echo " la suma de los votos es : ".$voto;
echo "<br>";


echo "<br>";
echo "----------------";
echo "<br>";
echo "junto valores en un nuevo array";
echo "<br>";
// $a=['$java'=> "java",'$voto'=>"$voto"];
// $a[]=$java,$voto;
// array_push($a,$java,$voto);
array_unshift($a,'$java',"$voto");
// array_push($a,$java,$voto);
//sumo y junto los datos en un nuevo array
// $d=$java+$a1;
// echo"".$d;
// $java1=array("java","voto");
// $c=array_combine("$java","$java2","$a1");
// print_r($a);
// $c=array_combine($java1,$d);

// $json_string= ["java","voto"];
// $a=array_combine($java1,$c);
print_r($a);

// // //codifico el array
// $json_string=json_encode($a);
// // //guardo en el archivo json
// file_put_contents($file,$json_string. PHP_EOL);

//codifico el array
$json_string1=json_encode($a);
//guardo en el archivo json
file_put_contents($file,$json_string1. PHP_EOL);
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