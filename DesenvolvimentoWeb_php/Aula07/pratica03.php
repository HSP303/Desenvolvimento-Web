<?php

$valor = $_REQUEST["valor"];
$desconto = $_REQUEST["desconto"];

function calcularPreco ($valor, $desconto) {
        return $valor - $desconto; 
}

try {
    echo "Preço: " . calcularPreco($valor, $desconto);
} catch (\Throwable $excecao) {

    echo $excecao->getMessage();
    
    }
?>