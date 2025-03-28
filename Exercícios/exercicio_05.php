<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
</head>
<body>

    <?php
        $nota1 = 6;
        $nota2 = 2;
        $nota3 = 7;
        $nota4 = 10;

        $media = round(($nota1 + $nota2 + $nota3 + $nota4) / 4);

        if ($media <= 5){
            echo 'REPROVADO!';
        } else if ($media > 5 && $media < 6){
            echo 'RECUPERAÇÃO!';
        } else if ($media >= 6){
            echo 'APROVADO!';
        }
        
        echo "<br> Sua média é de $media!"
    ?>
    
</body>
</html>