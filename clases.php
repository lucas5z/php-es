<?php

class User
{
    function hacer_algo()
    {
        echo "como estas ";
    }
}


$lucas = new User;
$lucas->hacer_algo();

class Prueba
{

    public $var = 'un valor predeterminado';
    //public $ola = 'hola como estas ';

    public $one = "hola como estas ";
    public function saludo()
    {

        echo $this->one;
    }

    // Declaración de una propiedad

    // Declaración de un método
    public function mostrarVar()
    {
        echo $this->var;
    }
}

$misaludo = new Prueba;
echo "<br>";
echo $misaludo->saludo();
echo "<br>";
echo $misaludo->mostrarVar();
echo "<br>";
