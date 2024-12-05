<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post">
        <label for="maca">Maçã: </label>
        <input type="number" id="maca" name="maca" value="0">
        <br>
        <label for="melancia">Melancia: </label>
        <input type="number" id="melancia" name="melancia" value="0">
        <br>
        <label for="laranja">Laranja: </label>
        <input type="number" id="laranja" name="laranja" value="0">
        <br>
        <label for="repolho">Repolho: </label>
        <input type="number" id="repolho" name="repolho" value="0">
        <br>
        <label for="cenoura">Cenoura: </label>
        <input type="number" id="cenoura" name="cenoura" value="0">
        <br>
        <label for="batatinha">Batatinha: </label>
        <input type="number" id="batatinha" name="batatinha" value="0">
        <br>
        <input type="submit" value="Calcular">
    </form>

</body>
</html>

<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    function calculaPreco($precos, $quantidades) {
        $precoTotal = 0;
        foreach ($quantidades as $produto => $quantidade) {
            if (!empty($quantidade) && is_numeric($quantidade)) {
                $precoTotal += $precos[$produto] * $quantidade;
            }
        }
        return $precoTotal;
    }

    function exibeMensagem($preco){
        
        if ($preco > 50) {
            echo "<p style='color:blue'>O preço total é $preco</p>";
        } else if ($preco < 50) {
            echo "<p style='color:red'>O preço total é $preco</p>";
        } else {
            echo "<p style='color:green'>O preço total é $preco</p>";
        }
    }

    $precos = [
        'maca' => 3,
        'melancia' => 10,
        'laranja' => 5,
        'repolho' => 3,
        'cenoura' => 4,
        'batatinha' => 6
    ];

    $quantidades = [
        'maca' => $_POST['maca'],
        'melancia' => $_POST['melancia'],
        'laranja' => $_POST['laranja'],
        'repolho' => $_POST['repolho'],
        'cenoura' => $_POST['cenoura'],
        'batatinha' => $_POST['batatinha']
    ];

    exibeMensagem(calculaPreco($precos, $quantidades));
}
?>
