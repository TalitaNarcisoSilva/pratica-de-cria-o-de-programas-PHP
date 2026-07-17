<?php
/*
Crie um programa em PHP utilizando as variáveis abaixo e exiba as informações
solicitadas.
$nome = " maria aparecida de souza ";
$curso = "programação web";
$nota = 8.756;
Faça:
1. Exiba o nome sem os espaços extras.
2. Exiba o nome todo em letras maiúsculas.
3. Exiba o nome todo em letras minúsculas.
4. Exiba apenas a primeira letra do nome em maiúscula.
5. Exiba a primeira letra de cada palavra em maiúscula.
6. Informe quantos caracteres possui o nome (desconsiderando os espaços do
início e do fim).
7. Exiba a nota com duas casas decimais.
8. Exiba a nota arredondada utilizando round().
9. Exiba a nota utilizando ceil().
10.Exiba a nota utilizando floor().
*/


// Variaveis
$nome = " maria aparecida de souza ";
$curso = "programacao web";
$nota = 8.756;

//Processamento


?>

<!--========== HTML ============-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atiividade 01</title>
</head>
<body>
    <h1> Atividade 01</h1>

    <?php 
    
    echo ("1-" . trim($nome) . "<br>"); // Exbição sem espaços extras 
    echo ("2-" . strtoupper($nome) . "<br>"); // Exibição toda em maiusculo 
    echo ("3-" . strtolower($nome) . "<br>"); // Exibição  toda em minusculo 
    echo ("4-" . ucfirst(trim($nome)) . "<br>"); // Exibição primeira letra maiuscula
    echo ("5-" . ucwords($nome) . "<br>"); //Exibição primeira letra de cada palavra maiuscula
    echo ("6-" . strlen(trim($nome)) . "<br>"); // Exibição da quantidade de caracteres
    echo ("7-" .number_format($nota,1) . "<br>"); // Exibe a nota com duas casas decimais
    echo ("8-" . round($nota) . "<br>"); // Exibição de nota arredonda para o mais próximo ou valor indicado
    echo ("9-" .ceil($nota) . "<br>"); // Exibição de nota arredondada pra cima
    echo ("10-" . floor($nota) . "<br>"); //Exibição de nota arredondada pra baixo
    ?>
</body>
</html>