<?php

$valor_vista = 8654;

$juros_24 = 0.015;
$juros_36 = 0.020;
$juros_48 = 0.025;
$juros_60 = 0.030;

$parcelas24 = 24;
$parcelas36 = 36;
$parcelas48 = 48;
$parcelas60 = 60;

function calculaValorParcela($juros, $qtd_parcelas, $valor_vista){
    $montante = $valor_vista * (1 + $juros * $qtd_parcelas);
    return number_format(($montante / $qtd_parcelas),2);
}

function exibeMensagem($valorParcela, $qtd_parcelas){
    echo "O valor da parcela é $valorParcela em $qtd_parcelas vezes. <br><br>";
}

exibeMensagem(calculaValorParcela($juros_24, $parcelas24, $valor_vista), $parcelas24);
exibeMensagem(calculaValorParcela($juros_36, $parcelas36, $valor_vista), $parcelas36);
exibeMensagem(calculaValorParcela($juros_48, $parcelas48, $valor_vista), $parcelas48);
exibeMensagem(calculaValorParcela($juros_60, $parcelas60, $valor_vista), $parcelas60);



?>