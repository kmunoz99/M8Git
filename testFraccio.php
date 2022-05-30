<?php

    include('Fraccio.php');
    use m8\Fraccio;   

    $f = new Fraccio();

    // Fraccions

    $f1 = new Fraccio();
    $f1->setNumerador(10);
    $f1->setDenominador(8);

    $f2 = new Fraccio();
    $f2->setNumerador(4);
    $f2->setDenominador(6);

    // Resultats

    echo '<h4>fracció 1: '.$f1->numerador.'/'.$f1->denominador.'</h4>';
    echo '<h4>fracció 1: '.$f2->numerador.'/'.$f2->denominador.'</h4>';

    echo '<h4>Suma de fraccions: '.$f->sumar($f1, $f2).'</h4>';
    echo '<h4>Resta de fraccions: '.$f->restar($f1, $f2).'</h4>';
    echo '<h4>Multiplicació de fraccions: '.$f->multiplicar($f1, $f2).'</h4>';
    echo '<h4>Divisió de fraccions: '.$f->dividir($f1, $f2).'</h4>';

    $f1->simplificar();
    echo '<h4>Reducció de fraccions (fracció 1): '.$f1->numerador.'/'.$f1->denominador.'</h4>';
    $f2->simplificar();
    echo '<h4>Reducció de fraccions (fracció 2): '.$f2->numerador.'/'.$f2->denominador.'</h4>';

?>
