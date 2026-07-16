<?php
/* Manipulação de strings (textos) */

//1) strlen - quantidade de caracteres
$nome = "Talita";
echo ("Ex: strlen:" . strlen($nome));

echo ("<br>");

$senha = "123456";
echo ("Ex: strlen:" . strlen($senha));

echo ("<br>");
//----------------------------------------

//2) strtoupper - tornar caracteres maiúsculos
$palavra = "bacon";
echo ("Ex. strtoupper:" . strtoupper($palavra));

echo ("<br>");

$estado = "mg";
echo ("Ex. strtoupper:" . strtoupper($estado));

echo ("<br>");
//-------------------------------------------

//3) strtolower - tornar caracteres minusculos
$produto = "SaBonete";
echo ("Ex. strtolower:" . strtolower($produto));

echo ("<br>");

$email = "Usuario@Gmail.com";
echo ("Ex. strtolower:" . strtolower($email));

echo ("<br>");
//--------------------------------------------

//4) ucfirst() - Primeira letra em maiúsculo
$bairro = "ressaca";
echo ("Ex. ucfirst:" . ucfirst($bairro));

echo ("<br>");

$frase = "a argentina ficou";
echo ("Ex. ucfirst:" . strtolower($frase));

echo ("<br>");

//-------------------------------------------

//5) uswords() - Primeira letra por palavra em maiúsculo
$rua = "avenida afonso pena";
echo ("Ex. ucwords:" . ucwords($rua));

echo ("<br>");

//--------------------------------------------

//6) trim() - Remove espaços antes e depois
$texto = "Php Básico";
echo ("Ex. trim:" . trim($texto));

echo ("<br>");

$login = "admin  ";
echo ("Ex. trim:: " . trim($login));

echo ("<br>");
//----------------------------------------------

//7) str-repeat() - Repete string quantas vezes quiser
echo (str_repeat("*", 30));

echo ("<br>");
//----------------------------------------------

//8) substr() - Retorna parte de uma string
echo ("Ex. substr():" . substr("Programação,", 1, 5));

echo ("<br>");

$cpf = "1234567890";
echo ("Ex. substr():" . substr($cpf, 0, 3));

echo ("<br>");

//--------------------------------------------------

//9) str_replace - Susbtitui uma palavra por outra
$texto = "PHP Básico";
echo("EX. str_replace(): " . str_replace("Básico" , "Avançado",$texto));

echo ("<br>");

$texto = "Bom dia aluno";
echo("Ex. str_replace():" . str_replace("aluno", "Talita", $texto));

echo ("<br>");
//-------------------------------------------------------

//10) strcmp() compara duas strings se o 0 são iguais
$senha = "1234";
$confirmarSenha = "1234";
echo("Ex. strcmp():" . strcmp($senha, $confirmarSenha) . "- Apenas nesse caso se der 0 são iguais");

echo ("<br>");
//-------------------------------------------------------

//11) str_contains() Verifica se na string contém um texto
$email = "usuario@gmail.com";
echo("Ex. str_contains():" . str_contains($email, "@"));

echo ("<br>");
//-------------------------------------------------------

//12) str_ends_with() - Verifica se strig termina com texto
$arquivo = "foto.jpg";
echo ("Ex. str_ends_with(): " . str_ends_with($arquivo , ".jpg"));

echo ("<br>");
//-------------------------------------------------------




?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exerccio1</title>
</head>

<body>

</body>

</html>