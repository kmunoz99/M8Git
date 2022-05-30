<?php
namespace m8;
include_once("Vector.php");
$v1 = new Vector(23,34);
$v2 = new Vector(15,23);
echo "Suma:\n";
echo $v1->sumaVectors($v2);
echo "==============\n";
echo "Resta:\n";
echo $v1->restaVectors($v2);
echo "==============\n";
echo "Producte Escalar:\n";
echo $v1->producteEscalar(4);
echo "==============\n";
echo "Producte Vectorial:\n";
echo $v1->producteVectorial($v2);
echo "==============\n";
echo "Modul: \n";
echo $v1->modul($v2);
echo "\n";
?>