<?php 
    function calculaMediaNotas() {
        $somaNotas = 0;
        for($i = 0; $i < count(notas); $i++) {
            $somaNotas += notas[$i];
        }
        $mediaNotas = $somaNotas / count(notas);
        return $mediaNotas;
    }

    function verificaStatusNotas($mediaNotas) {
        if($mediaNotas >= 7) {
            return "Aprovado";
        }
        return "Reprovado";
    }

    function calculaFrequencia() {
        $somaFrequencia = 0;
        for($i = 0; $i < count(aulas); $i++) {
            $somaFrequencia += aulas[$i];
        }
        $frequencia = 100 - (($somaFrequencia * 100) / $i);
        return $frequencia;
    }

    function verificaStatusFrequencia($frequencia){
        if($frequencia >= 70) {
            return "Aprovado";
        }
        return "Reprovado";
    }

    function exibeMensagem($mensagem) {
        echo $mensagem;
    }


?>