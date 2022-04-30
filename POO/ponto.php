<?php 

class Ponto{
    private $x;
    private $y;
    private static $contador;

    public function __construct($x, $y)
    {
        $this->setx($x);
        $this->sety($y);
    }

    private static function setContador(){
        self::$contador++;
    }

    public static function getContador(){
        return self::$contador;
    }

    public function getx()
    {
        return $this->x;
    }

    public function setx($x)
    {
        $this->x = $x;
    }

    public function gety()
    {
        return $this->y;
    }

    public function sety($y)
    {
        $this->y = $y;
    }

}