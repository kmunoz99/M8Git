<?php 
// *
// * @author arnau

namespace M8;

class Matriu
{
    private $matriu = array();
    
    function  __construct(&$matriu)
    {
        $this->matriu = $matriu;
    }

    function sumaMatrius($m1)
    {
        $matriuResultat = $this;
        if (count($m1->matriu) == count($this->matriu) && count($m1->matriu[0]) == count($this->matriu[0]))
        {
            for ($i = 0; $i < count($m1->matriu); $i++)
            {
                for ($j = 0; $j < count($m1->matriu[$i]); $j++)
                {
                    $matriuResultat->matriu[$i][$j] = $this->matriu[$i][$j] + $m1->matriu[$i][$j];
                }
            }
        }
        return $matriuResultat;
    }

    function restaMatrius($m1)
    {
        $matriuResultat = $this;
        if (count($m1->matriu) == count($this->matriu) && count($m1->matriu[0]) == count($this->matriu[0]))
        {
            for ($i = 0; $i < count($m1->matriu); $i++)
            {
                for ($j = 0; $j < count($m1->matriu[$i]); $j++)
                {
                    $matriuResultat->matriu[$i][$j] = $this->matriu[$i][$j] - $m1->matriu[$i][$j];
                }
            }
        }
        return $matriuResultat;
    }

    function multiplicaMatriuPerEscalar($escalar)
    {
        $matriuResultat = $this;
        for ($i = 0; $i < count($this->matriu); $i++)
        {
            for ($j = 0; $j < count($this->matriu[$i]); $j++)
            {
                $matriuResultat->matriu[$i][$j] = $this->matriu[$i][$j] * $escalar;
            }
        }
        return $matriuResultat;
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
    }
}

?>