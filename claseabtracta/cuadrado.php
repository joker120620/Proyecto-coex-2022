<?php
require("./abtractClass.php");
class areaCuadrado extends areaFiguaras {

    public $area;
    public $perimetro;
    public function __construct($lado)
     {
            $this->area = $lado*$lado;
            $this->perimetro = $lado*4;
     }
     public function obtenerDatos()
     {
        return "Area del cuadrado: ".$this->area."<br>". "el perimetro es : ".$this->perimetro;
     }
     
    }
    ;
?>