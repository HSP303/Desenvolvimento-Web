<?php

$salario1 = 1000;
    $salario2 = 2000;
    $salario2 = $salario1;
    $salario2++;
    $salario1 *= 1.1;
   // $salario2 += 99;

    if ($salario1 > $salario2){
        echo "O valor do salário 1 é maior que o valor do salário 2!";
    } else {
        if ($salario1 < $salario2) {
            echo "O valor do salário 2 é maior que o valor do salário 1";
        } else {
            echo "O valor de ambos os salário são iguais";
        }
    } 

?>