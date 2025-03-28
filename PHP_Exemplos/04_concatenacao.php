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
    $nome = 'Andrei';
    $idade = 17;
    $altura = 1.89;
    $fumante = true;

    //Olá Andrei! Você tem 17 anos.

    echo 'Olá ' .$nome.'! Você tem '.$idade.' anos. <br>'; //Somente texto

    echo "Olá $nome! Você tem $idade anos." //Quando houver variáveis
?> 

</body>
</html>