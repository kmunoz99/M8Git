<?php 
/**
 * @author arnau
 */

include "Matriu.php";

$m1 = array();
$m2 = array();

 for($i = 0; $i < 3; $i = $i +1){
    for($j = 0; $j < 3; $j = $j +1){
        $m1[$i][$j] = $i;
        $m2[$i][$j] = $j;
    }
 }

 $matriu1 = new Matriu($m1);
 $matriu2 = new Matriu($m2);

 $matriu1->showMatriu();

 echo "   +   <br>";

 $matriu2->showMatriu();

 echo "   =   <br>";

 $matriu3 = $matriu1->sumaMatrius($matriu2);

 $matriu3->showMatriu();

 echo "<br>-------------------------------<br>";

 $matriu1->showMatriu();

 echo "  -  <br>";

 $matriu2->showMatriu();

 echo "  =   <br>";

 $matriu4 = $matriu1->restaMatrius($matriu2);

 $matriu4->showMatriu();

 echo "<br>-------------------------------<br>";

 $matriu1->showMatriu();

 echo "  * 4 = <br>";

 $matriu5 = $matriu1->multiplicaMatriuPerEscalar(4);

 $matriu5->showMatriu();

 
 echo "<br>-------------------------------<br>";

 $matriu1->showMatriu();

 echo "  *  <br>";

 $matriu2->showMatriu();

 echo "  =   <br>";

 $matriu6 = $matriu1->producteDuesMatrius($matriu2);

 $matriu6->showMatriu();

 echo "<br>-------------------------------<br>";

 $matriu1->showMatriu();

 echo "  Inversa = <br>";

 $m1 = $matriu1->matriuInvertida();

 $matriu7 = new Matriu($m1);

 $matriu7->showMatriu();
?>
