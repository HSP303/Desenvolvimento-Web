<?php /*
    $salario1 = 1000;
    $salario2 = 2000;
    $salario2 = $salario1;
    $salario2++;
    $salario1 *= 1.1;
    $salario2 += 500;

    if ($salario1 > $salario2){
        echo "O valor do salário 1 é maior que o valor do salário 2!";
    } else {
        if ($salario1 < $salario2) {
            echo "O valor do salário 2 é maior que o valor do salário 1";
        } else {
            echo "O valor de ambos os salário são iguais";
        }
    } 


    for ($x = 0; $x <= 100; $x++ ) {
        $x++;

        if ($x = 50) {
            break;
        }
    }

    if ($salario1 < $salario2) {
        echo "Salário1: $salario1";
    }

    $carros = array("Volvo", "BMW", "Toyota");
    echo "Eu gosto de " .$carros[0].", ".$carros[1]." e ".$carros[2]. "'<br>'";

    var_dump($carros);

    $idade = array("João"=>"35", "Maria"=>"37", "José"=> "43");

    foreach ($idade as $key => $value) {
        echo "Chave: ". $key .", Valor: ". $value ."'<br>'";
    }*/

    $diciplinas = array("Banco de Dados II","Estrutura de Dados II","Administração de Sistemas da Informação","Engenharia de Sofware","Programação Web");
    $professores = array("Marco","Bastos","Sandro","Julian","Cleber");

    for ($i = 0; $i < count($diciplinas); $i++) {    
        echo"Diciplina:".$diciplinas[$i]."   ===>   Professor: ".$professores[$i]. "<br>";
    }

?>
