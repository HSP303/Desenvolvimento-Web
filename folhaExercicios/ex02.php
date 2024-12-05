<?php

$valor = $_REQUEST["valor"];

function exibeMensagem($divisivel) {
    if ($divisivel) {
        echo "Valor divisível por 2";
    } else {
        echo "Valor não divisível por 2";
    }
}

function eDivisivelPorDoi($valor){
    if ($valor % 2== 0) {
        return True;
    } else {
        return False;
    }
}
exibeMensagem(eDivisivelPorDoi($valor));



?>