<?php

class Ponto
{
    private $x;
    private $y;
    private static $contador;

    public function __construct($x, $y)
    {
        $this->setx($x);
        $this->sety($y);
        self::setContador();
    }

    public function calcularDistancia(Ponto $p)
    {
        $valorx = pow(($p->getx - $this->x), 2);
        $valory = pow(($p->gety - $this->y), 2);
        return sqrt($valorx + $valory);
    }

    public function calcularDistancia2($x2, $y2)
    {
        $valorx = pow(($x2 - $this->x), 2);
        $valory = pow(($y2 - $this->y), 2);
        return sqrt($valorx + $valory);
    }

    public function calcularDistancia3($x1, $x2, $y1, $y2)
    {
        $valorx = pow(($x2 - $x1), 2);
        $valory = pow(($y2 - $y1), 2);
        return sqrt($valorx + $valory);
    }

    private static function setContador()
    {
        self::$contador++;
    }

    public static function getContador()
    {
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

?>
