<?php

$comprimento = $_REQUEST["comp"];

function calculaArea ( $comprimento ) {
    return $comprimento ** 2;
}

function exibeMensagem ( $comprimento, $area ) {
    echo "A área do quandrado de " . $comprimento . " metros é " . $area . " metros";
}

exibeMensagem ( $comprimento, calculaArea ( $comprimento ) );

?>