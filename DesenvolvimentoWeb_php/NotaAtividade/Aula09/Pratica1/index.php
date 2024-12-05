<?php

require_once("functions.php");

//Declarar arrays de dados como variáveis de escopo global
define("notas", array(6, 8, 10, 7));
define("aulas", array(0, 1, 0, 0, 1, 0, 0, 1, 0, 0));


$mediaNotas = calculaMediaNotas();
$frequencia = calculaFrequencia();

exibeMensagem("Média de Notas: " . $mediaNotas . "\n" .
              "Status Nota: " . verificaStatusNotas($mediaNotas) . "\n" . 
              "Frequencia: " . $frequencia . "\n" .
              "Status Frequencia: " . verificaStatusFrequencia($frequencia) . "\n");

?>