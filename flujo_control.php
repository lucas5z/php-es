<?php

echo "hola";


//flujo de control 
//WHILE
$a = 0;
while ($a < 10) :
    echo $a;
    $a++;
endwhile;
echo "<br>";

// DO WHILE 
$b = 2;
do {
    echo $b;
    $b++;
} while ($b < 5);
echo "<br>";
// for 
$vila = array("hola", 2, true, 2.4343);

for ($i = 0; $i < count($vila); $i++) {
    echo $vila[$i] . "  ";
}
echo "<br>";
// foreach

$garcia = array(1, 3, 5, 6, 7, 8);
// este foreach es el array y el valor 

foreach ($garcia as $valor) {
    echo $valor;
}
echo "<br>";
// este foreach es el array y tiene la clave ,valor 

foreach ($garcia as $j => $valor) {
    echo $j . "=>" . $valor;
}
