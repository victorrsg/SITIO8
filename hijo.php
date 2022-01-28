<?php
require('./clases/padre.php');
class Hijo extends Padre{

    public $ciudad;
    public $email;
public function __construct(string $ciudad)
{
    $this->ciudad=$ciudad;
}

public function __construct1(string $ciudad, string $email)
{
    $this->ciudad=$ciudad;
    $this->email=$email;
}
public function saludar($nombre)
{
    echo "<p>Hola, soy un método de hijo";
}

public function restar(float $num1,float $num2)
{
    $total=$num1-$num2;
    return $total;
}
}