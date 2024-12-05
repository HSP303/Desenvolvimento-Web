<?php
    $matriz = array(array("Banco de Dados II", 5, 8.5), array("Estrutura de Dados II", 2, 9), array("Administração de Sistemas", 10, 6), array("Engenharia de Software II", 2, 8), array("Programação Web I", 10, 10));

    foreach ($matriz as $mtz) {
        foreach ($mtz as $key => $value) {

            if ($mtz[0] == $value) {
                echo"".$value." ===> ";
            } else {
            echo "".$value ." | ";
            }
        }
        echo '<br>';
    }


?>