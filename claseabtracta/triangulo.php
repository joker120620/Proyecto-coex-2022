<?php
require("./abtractClass.php");
class areaTriangulo extends areaFiguaras {
    protected int $area;
    public $perimetro;
     public function __construct($base,$altura)
        {
               $this->area = ($base*$altura)/2;
               $this->perimetro = $base*3;

        }
    public function obtenerDatos()
    {
        return "Area del triangulo: ".$this->area."<br>". "el perimetro es : ".$this->perimetro;
        }
    };
?>