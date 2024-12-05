<?php

$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb",
            "bancoDados 1",
            "engSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web",
            "bancoDados 2",
            "engSoft 2"
        )
    )
);

$pilha = array();
$visitados = array();


function exibirArvore($array, $nivel = 0) {
    foreach ($array as $key => $value) {
        echo str_repeat("-", $nivel) . " " . $key . "<br>";

        if (is_array($value)) {
            exibirArvore($value, $nivel + 1);
        } else {
            echo str_repeat("-", $nivel + 1) . " " . $value . "<br>";
        }
    }
}



//print_r(escreveDir("bsn", $pilha, $pastas["bsn"], $visitados));
exibirArvore("bsn", $pilha, $pastas["bsn"], $visitados);

$array_tmp = $pastas["bsn"];

$chaves = array_keys($array_tmp);  

//print_r($chaves);
if ($chaves[0] <> 0){
    
}
?>