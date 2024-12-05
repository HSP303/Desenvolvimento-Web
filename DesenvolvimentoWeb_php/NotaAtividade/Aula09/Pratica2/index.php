<?php

$pastas = array(
    "bsn" => array(
        "3a Fase" => array("desenvWeb", "bancoDados 1", "engSoft 1"),
        "4a Fase" => array("Intro Web", "bancoDados 2", "engSoft 2")
    )
);

function exibirArvore($array, $nivel = 1) {
    foreach ($array as $key => $value) {
        if (is_string($key)){
            echo str_repeat("-", $nivel) . " " . $key . "\n";
        } 

        if (is_array($value)) {
            exibirArvore($value, $nivel + 1);
        } else {
            echo str_repeat("-", $nivel) . " " . $value . "\n";
        }
    }
}

exibirArvore($pastas);

?>