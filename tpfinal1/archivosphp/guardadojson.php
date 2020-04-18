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
echo "<br>";
//recorro los elementos del array recibido
foreach ($post as $key => $value) {
  
}
echo "El juego votado es " . $post[0] . " y tiene : " . $value. " voto.";
echo "<br>";
echo "----------------";
echo "<br>";
//extraigo los datos del array y las asigno a variables
// extract($post);
// echo "\$java=$post[0] \$voto=$post[1]";
// echo "<br>";
// echo "---------------";
// echo "<br>";
// echo "asigno las posiciones del array a variables";
$java=$post[0];
$voto=$post[1];

//obtengo el contenido
$json_string=file_get_contents($file);
//decodifico
$voto1=json_decode($json_string);
// "imprimo el valor que esta en la segunda posicion del archivo y lo asigno a la variable votoextraido";
echo "<br>";
foreach ($voto1 as $key =>$votoextraido) {
   
}
// echo  "sumo el voto extraido y el del array post";
$voto=$voto+$votoextraido;
// echo "<br>";
//inserto los datos en un nuevo array.
array_unshift($a,'$java',"$voto");
//imprimo
//codifico el array
$json_string1=json_encode($a);
//guardo en el archivo json
file_put_contents($file,$json_string1);
// echo "<br>";
//obtengo el contenido
$json_string1=file_get_contents($file);
//decodifico e imprimo
$c=(json_decode($json_string1));
foreach ($c as $key => $value) {
    # code...
}
print_r("el juego java tiene ".$value." votos." );
echo "<br>";
echo "----------------------------";
echo "<br>";
?>