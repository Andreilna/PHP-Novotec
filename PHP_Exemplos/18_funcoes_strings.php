<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas - Strings</title>
</head>
<body>

    <?php

        $texto = 'Novotec 2022!';

        echo $texto;
        echo '<hr>';
        echo strtoupper($texto); //Tudo Maiúsculo
        echo '<hr>';
        echo strtolower($texto); //Tudo Minúsculo
        echo '<hr>';
        echo ucfirst($texto); //Primeira Maiúscula
        echo '<hr>';
        echo strlen($texto); //Conta os caracteres / Inclusive espaços
        echo '<hr>';
        echo str_replace('2022', 'são lindos!', $texto); //Substitui "blocos/cadeia" de caracteres
        echo '<hr>';
        echo substr($texto,8,4); //Exibe parte da String
        echo '<hr>';
    
    ?>
    
</body>
</html>