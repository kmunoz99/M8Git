<?php
namespace m8;

class Fraccio
{

    public $numerador;
    public $denominador;
    
    function  __construct()
    {
        $this->x = 0;
        $this->y = 1;
    }

    function setNumerador($num)
    {
        $this->numerador = $num;
    }

    function setDenominador($den)
    {
        $this->denominador = $den;
    }
    
    function sumar (Fraccio $a, Fraccio $b) 
    {
        $c = new Fraccio();
        $c->numerador = ($a->numerador * $b->denominador) + ($b->numerador * $a->denominador);
        $c->denominador = $a->denominador * $b->denominador;
        return $c;
    }

    function restar (Fraccio $a, Fraccio $b) 
    {
        $c = new Fraccio();
        $c->numerador = ($a->numerador * $b->denominador) - ($b->numerador * $a->denominador);
        $c->denominador = $a->denominador * $b->denominador;
        return $c;
    }

    function multiplicar (Fraccio $a, Fraccio $b) 
    {
        $c = new Fraccio();
        $c->numerador = ($a->numerador * $b->numerador);
        $c->denominador = ($a->denominador * $b->denominador);
        return $c;
    }

    function dividir (Fraccio $a, Fraccio $b) 
    {
        $c = new Fraccio();
        $c->numerador = ($a->numerador * $b->denominador);
        $c->denominador = ($a->denominador * $b->numerador);
        return $c;
    }

    function simplificar () 
    {
        if (($this->numerador < 0 && $this->denominador < 0 ) || ( $this->denominador < 0)) {
            $this->expansion( -1 );
        }
        $hcd = $this->highestCommonDivisor($this->numerador, $this->denominador);
        $this->numerador /= $hcd;
        $this->denominador /= $hcd;
    }

    public function highestCommonDivisor($a, $b) 
    {
        $a = abs( $a );
        while ( $a != $b ) {
            if ( $a > $b ) {
                $a = $a - $b;
            }else {
                $b = $b - $a;
            }
        }
        return $a;
    }

    function expansion($num) 
    {
        $this->numerador *= $num;
        $this->denominador *= $num;
    }

    function __toString()
    {
        return ''.$this->numerador.'/'.$this->denominador.'';
    }

}

?>
