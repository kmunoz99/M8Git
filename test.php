<?php 
// *
// * @author arnau
class Matriu
{
    private $matriu = array();
    
    function  __construct(&$matriu)
    {
        $this->matriu = $matriu;
    }

    function sumaMatrius($m1)
    {
        $matriuResultat = null;
        if (count($m1->matriu) == count($this->matriu) && count($m1->matriu[0]) == count($this->matriu[0]))
        {
            for ($i = 0; $i < count($m1->matriu); $i++)
            {
                for ($j = 0; $j < count($m1->matriu[$i]); $j++)
                {
                    $matriuResultat[$i][$j] = $this->matriu[$i][$j] + $m1->matriu[$i][$j];
                }
            }
        }
        $matriuARetornar = new Matriu($matriuResultat);
        return $matriuARetornar;
    }

    function restaMatrius($m1)
    {
        $matriuResultat = null;
        if (count($m1->matriu) == count($this->matriu) && count($m1->matriu[0]) == count($this->matriu[0]))
        {
            for ($i = 0; $i < count($m1->matriu); $i++)
            {
                for ($j = 0; $j < count($m1->matriu[$i]); $j++)
                {
                    $matriuResultat[$i][$j] = $this->matriu[$i][$j] - $m1->matriu[$i][$j];
                }
            }
        }
        $matriuARetornar = new Matriu($matriuResultat);
        return $matriuARetornar;
    }

    function multiplicaMatriuPerEscalar($escalar)
    {
        $matriuResultat = null;
        for ($i = 0; $i < count($this->matriu); $i++)
        {
            for ($j = 0; $j < count($this->matriu[$i]); $j++)
            {
                $matriuResultat[$i][$j] = $this->matriu[$i][$j] * $escalar;
            }
        }
        $matriuARetornar = new Matriu($matriuResultat);
        return $matriuARetornar;
    }

    function producteDuesMatrius($m1)
    {
        $matriuResultat = array_fill(0,count($this->matriu),array_fill(0,count($m1->matriu[0]),0.0));
        if (count($this->matriu[0]) == count($m1->matriu))
        {
            for ($i = 0; $i < count($this->matriu); $i++)
            {
                for ($j = 0; $j < count($m1->matriu[0]); $j++)
                {
                    for ($k = 0; $k < count($this->matriu[0]); $k++)
                    {
                        $matriuResultat[$i][$j] += $this->matriu[$i][$k] * $m1->matriu[$k][$j];
                    }
                }
            }
        }
        $matriuARetornar = new Matriu($matriuResultat);
        return $matriuARetornar;
    }


    function matriuIdentitat($n){
        $I = array();
        for($i = 0; $i < $n; $i = $i + 1){
            for($j = 0; $j < $n; $j = $j + 1){
                if($i == $j){
                    $I[$i][$j] = 1;
                }else{
                    $I[$i][$j] = 0;
                }
            }
        }
        return $I;
    }

    function matriuInvertida($debug = TRUE)
    {
        /// @todo check rows = columns

        $n = count($this->matriu);

        // get and append identity matrix
        $I = $this->matriuIdentitat($n);
        for ($i = 0; $i < $n; ++ $i) {
            $this->matriu[$i] = array_merge($this->matriu[$i], $I[$i]);
        }

        return $I;
    }


    function showMatriu()
    {
        for ($i = 0; $i < count($this->matriu); $i++)
        {
            for ($j = 0; $j < count($this->matriu[$i]); $j++)
            {
                printf(" %.2f |",$this->matriu[$i][$j]);
            }
            echo "<br>";
        }
    }

    function __toString(){
        
        $m = "";
        for ($i = 0; $i < count($this->matriu); $i++)
        {
            for ($j = 0; $j < count($this->matriu[$i]); $j++)
            {
                $m += "$this->matriu[$i][$j] | ";
            }
            echo "<br>";
        }
    }
}