<?php 
namespace m8;
class Vector
{
    private $x;
    private $y;
    
    function  __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    
    function sumaVectors($v1){
    	$vectorResultant = new Vector($this->x + $v1->x, $this->y + $v1->y);
    	return $vectorResultant;
    }

    function restaVectors($v1){
        $vectorResultant = new Vector($this->x - $v1->x, $this->y - $v1->y);
    	return $vectorResultant;
    }

    function producteEscalar($k){
        $vectorResultant = new Vector($this->x * $k, $this->y * $k);
    	return $vectorResultant;
    }
    function producteVectorial($v1){
        $x = $this->x * $v1->y;
        $y = $this->y * $v1->x;
        return new Vector($x,$y);
    }
    function modul(){
        $squares = ($this->x ^ 2) +  ($this->y ^2);
        return sqrt($squares);
    }
    public function __toString() {
        return "X: ".$this->x ."\nY: ".$this->y."\n";
    }
}