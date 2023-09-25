<?php

class Auto
{
    public $motor;
    public $color;
    public $llantas;

    public function encender()
    {
        $this->motor = "el motor esta ensendido RUN RUN ";
        echo $this->motor;
    }
    public function color($c)
    {
        $this->color = $c;
        echo "el color de tu veiculo es $this->color -> fino";
    }
    public function llantas($ll)
    {
        $this->llantas = $ll;
        echo "tu veiculo tine $this->llantas neumaticos-> no esta mal  xd";
    }
}

$carro = new Auto;
$carro->llantas = "7";
echo "<br>";

echo "<br>";
$carro->encender();
echo "<br>";
$carro->color("negro");
echo "<br>";

$carro->llantas(4);
$carro->llantas = 5;
