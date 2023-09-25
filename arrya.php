<?php
$papel[2] = "copiar";
$papel[3] = "incas ser";


echo $papel;
$hola = array("one" => "uno", "due" => "dos", "there" => "tres");

echo $hola . "<br>";
print_r($hola) . "<br>";


foreach ($hola as $contador => $descricion) {
    echo "$contador : $descricion<br>";
}


//para asignar valore de un array 

list($a, $b) = array('alice', 'bob');
echo "a=$a b=$b";

//explore para separar un string en arry

$mides = explode(" ", " hola como estas yo mu vien ");
echo "<br>";
print_r($mides);


//agara la variable de un arry 
extract($get, EXTR_PREFIX_ALL, 'miprefijo');
// compact para poner valores a un arry 