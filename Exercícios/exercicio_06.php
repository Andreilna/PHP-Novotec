<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 06</title>
</head>
<body>

    <?php
        $letra1 = 32;
        $letra2 = 32;

        if ($letra1 > $letra2){
            echo "Letra A $letra1 é maior que letra B $letra2";
        } else if ($letra1 < $letra2){
            echo "Letra A $letra2 é maior que letra B $letra1";
        } else {
            echo "Letra A $letra1 é igual a letra B $letra2";
        }
    ?>
    
</body>
</html>