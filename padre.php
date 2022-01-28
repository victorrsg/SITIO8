<?php
abstract class Padre
{
    public $nombre;
    protected $unidades;
    private $precio;

    public function __construct(string $nombre, int $unidades, float $precio)
    {
        $this->nombre=$nombre;
        $this->unidades=$unidades;
        $this->precio=$precio;
        
    }
    public function saludar($nombre)
    {
        echo"<i>Hola </i>".$nombre;
    }
    

    public function verTareas($tipo)
    {
        #return $tipo=="urgente" ? "Lista de tareas urgentes"
        if ($tipo=="urgente")
        {
            return "<p>Lista de tareas urgentes...</p>";
        }
        elseif ($tipo=="importante")
        {
            return "<p>Lista de tareas importantes...</p>";
        }
        else
        {
            return "<p>No hay tareas...</p>";
        }
    }
}

