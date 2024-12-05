<?php



define("aulas", array(0,1,0,0,0,0,1,0,0,0));
define("notas", array(10,3,2,4));

function calcularMediaNotas($notas){
    $soma = 0;
    for ($i = 0; $i < count($notas); $i++){
        $soma =  $soma + notas[$i];
    }
    return $soma / count($notas);
}

function exibeMensagem ($mensagem) {
    echo $mensagem;
}

echo "Media: " . calcularMediaNotas(notas) . "";




?>