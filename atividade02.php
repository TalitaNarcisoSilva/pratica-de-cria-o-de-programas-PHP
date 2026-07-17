<?php
/*
Uma loja cadastrou o seguinte produto:
$produto = "Notebook Gamer";
$preco = 4599.989;
$desconto = -350;
Faça:
1. Exiba o nome do produto em letras maiúsculas.
2. Exiba o nome do produto em letras minúsculas.
3. Inverta o nome do produto.
4. Exiba apenas a palavra "Notebook".
5. Formate o preço para o padrão brasileiro.
6. Exiba apenas o valor inteiro do preço utilizando round().
7. Exiba o preço arredondado para cima.
8. Exiba o preço arredondado para baixo.
9. Mostre o valor absoluto do desconto.
10.Calcule o quadrado do número 5 utilizando pow()
*/ 

//Variáveis
$produto = "Notebook Gamer";
$preco = 4599.989;
$desconto = -350;
$valor = 5;

//Processamento

?>



<!--========== HTML ============-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 02</title>
</head>
<body>
    <h2> Atividade 02</h2>

    <?php
    echo ("1-" . strtoupper($produto) . "<br>"); // Exibição toda em maiusculo 
    echo ("2-" . strtolower($produto) . "<br>");// Exibição toda em minusculo
    echo ("3-" . strrev($produto) . "<br>"); // Inverte o texto
    echo ("4-" . substr($produto, 0,8) . "<br>"); //Exibe apenas a primeira palavra
    echo ("5- R$" . number_format($preco,2,",",".") . "<br>"); // formatação de numeros
    echo ("6-" . round($preco) . "<br>"); 
    echo ("7-" . ceil($preco) . "<br>"); // Exibição de preço arredondado pra cima
    echo ("8-" . floor($preco) . "<br>");// Exibição de preço arredondado pra baixo
    echo ("9-" . abs($desconto) . "<br>"); // Exibição de valor absoluto
    echo ("10-" . pow($valor,0.5) . "<br>");


    ?>
</body>
</html>