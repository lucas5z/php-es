<?php
//FUNCIONES definidas por el usuario

function salucar()
{
    echo "hola";
}
salucar();
echo "<br>";
//argumentos de funciones

$lista = array(1, 2, 3, 4, 5, 6);

function lista($lis)
{
    foreach ($lis as $valor) {
        echo $valor;
    }
}

echo lista($lista);
echo "<br>";
// argumentos ilimitados

function sumita(...$sun)
{
    $total = 0;
    foreach ($sun as $valor) {

        $total += $valor;
    }
    return $total;
}
echo sumita(1, 3, 4, 5, 6, 7);
echo "<br>";

//retun datos con el tipo de dato especifico

function multiplicar($x, $y): float
{

    return $x * $y;
}

//esta funcio tanbien puede retornar un null aparte del tipo
// de dato .
function multiplicar2($x, $y): ?float
{
    if ($x == 0) {
        return null;
    }
    return $x * $y;
}
echo multiplicar(4.3, 4);
echo "<br>";
//funciones anonimas 

$operar = multiplicar($x, $y);

//echo $operar(2.4, 3);
