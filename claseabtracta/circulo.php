<?php
require("./abtractClass.php");
class areaCirculo extends areaFiguaras {

    public $area;
    public $perimetro;
    public function __construct($radio)
     {
        $Pi=3.1416;
        $this->area = $Pi  * ($radio *$radio);
        $this->perimetro = 2*($Pi* $radio);
     }
     public function obtenerDatos()
     {
        return "Area del cuadrado: ".$this->area."<br>". "el perimetro es : ".$this->perimetro;
     }
     
    }
    ;
?>