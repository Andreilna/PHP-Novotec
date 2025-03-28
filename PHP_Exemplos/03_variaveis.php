<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>

<?php
    //STRING = Caracteres
    //INT = Valores numéricos positivos ou negativos
    //FLOAT = Valores Númericos = Negativos e Frações
    //BOOLEAN = TRUE ou FALSES
    //ARRAY = Vários dados na mesma variável

    //Regras:
    //Sempre inicia por $
    //Não pode ter espaços ou caracteres especiais
    //Case Sensitive - Diferença entre Maiúsculo e Minúsculo
    //Não requer definição de tipo

    //String
    $nome = 'Andrei';

    //Int
    $idade = 17;

    //Float
    $altura = 1.89;

    //Boolean
    $fumante = true;
    // 1 - True
    // empty = False

    echo $nome;

?> 

    <h1>Ficha Cadastral</h1>
    <br>
    <p>Nome: <?= $nome?></p>
    <p>Idade: <?= $idade?></p>
    <p>Altura: <?= $altura?></p>
    <p>Fumante? <?= $fumante?></p>
    
</body>
</html>