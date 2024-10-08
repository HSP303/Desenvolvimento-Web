<?php

$comprimento = $_REQUEST["comp"];
$largura = $_REQUEST["larg"];

function calculaArea ( $comprimento, $largura ) {
    return $comprimento * $largura;
}

function exibeMensagem ( $comprimento, $largura, $area ) {
    if ($area > 10) {
        echo "<h1>A área do retângulo de lados $comprimento e $largura metros é $area metros quadrados.</h1>";
    } else {
        echo "<h3>A área do retângulo de lados $comprimento e $largura metros é $area metros quadrados.</h3>";
    }
}

exibeMensagem ( $comprimento, $largura, calculaArea ( $comprimento, $largura ) );

?>


