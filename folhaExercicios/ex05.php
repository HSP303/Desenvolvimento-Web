<?php

$base = $_REQUEST["base"];
$altura = $_REQUEST["altura"];

function calculaArea ( $base, $altura ) {
    return $comprimento * $largura / 2;
}

function exibeMensagem ( $base, $altura, $area ) {

    echo "<h3>A área do retângulo de lados $comprimento e $largura metros é $area metros quadrados.</h3>";
}

exibeMensagem ( $base, $altura, calculaArea ( $base, $altura ) );

?>
