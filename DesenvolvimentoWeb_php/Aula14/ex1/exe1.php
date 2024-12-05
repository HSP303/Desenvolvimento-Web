<?php
    require_once("calculadora.php");

    $calculadora = new Calculadora();
    $calculadora->setOperador1(10);
    $calculadora->setOperador2(10);
    echo $calculadora->somar();
    echo "<br>";
    echo $calculadora->subtrair();
    echo "<br>";
    echo $calculadora->multiplicar();
    echo "<br>";
    echo $calculadora->dividir();

?>