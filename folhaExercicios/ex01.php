<?php

$val1 = 0;
$val2 = 0;
$val3 = 0;

function recebeValores(&$val1, &$val2, &$val3) {
    $val1 = $_REQUEST["val1"];
    $val2 = $_REQUEST["val2"];
    $val3 = $_REQUEST["val3"];
}

function fazSoma( $val1, $val2, $val3 ) {
    return $val1 + $val2 + $val3;
}

function exibeMensagem($msg, $val1, $val2, $val3) {
    
    if ($val1 < 10) {
        echo "<p style='color:blue'>$msg</p>";
    }
    else if ($val2 < $val3) {
        echo "<p style='color:green'>$msg</p>";
    }
    else if ($val3 < $val1 && $val2 > $val3) {
        echo "<p style='color:red'>$msg</p>";
    }
}



recebeValores($val1, $val2, $val3);
exibeMensagem(fazSoma($val1, $val2, $val3), $val1, $val2, $val3);


?>