<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
</head>
<body>

    <?php
        // Operador E (AND ou &&) = São verdadeiros quando TODAS as expressões são VERDADEIRAS

        // Operador OU (OR ou ||) = São verdadeiros SE PELO MENOS UMA das expressões forem VERDADEIRAS

        // Operador NEGAÇÃO (!) = Inverte os resultados

        // Operador XOR (XOR) = Será verdadeiro SE APENAS UMA DAS EXPRESSÕES for verdadeira

        if (5 == 3 XOR 10 > 3){
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }
    ?>
    
</body>
</html>