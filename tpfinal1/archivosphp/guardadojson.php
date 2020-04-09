<?php
//creo el json con el dato del formulario
$file= 'archivo.json';
//agregando elementos
array_push($_POST,105,"diez");
//codifico
$json_string=json_encode($_POST);
file_put_contents($file,$json_string. PHP_EOL, FILE_APPEND);

 
foreach ($_POST as $key => $value) {
    echo "<pre>";
    echo "El valor de " . $key . "es: " . $value;
    echo "</pre>";
}


---------------------------------
 


<form action="<?php echo $_SERVER['PHP_SELF'] " method="post"> 
echo "-----------";
?>