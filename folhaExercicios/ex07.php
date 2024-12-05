<?php

    $valor_vista = $_REQUEST["vista"];
    $qtd_parcelas = $_REQUEST["qtdpar"];
    $valor_parcela = $_REQUEST["parcela"];
    $valor_parcelado = 0;

    function calculaPrecoParcelado($qtd_parcelas, $valor_parcela) {
        return $qtd_parcelas * $valor_parcela;
    }

    function calculaJuros($valor_vista, $valor_parcelado) {
        return $valor_parcelado - $valor_vista;
    }

    function exibeMensagem($juros){
        echo "O valor do Juros é: " . $juros ."";
    }

    

    exibeMensagem(calculaJuros($valor_vista, calculaPrecoParcelado($qtd_parcelas, $valor_parcela)));

?>