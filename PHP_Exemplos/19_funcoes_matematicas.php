<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Matemáticas</title>
</head>
<body>

    <?php
    
    $num = 7.3;

    echo $num;
    echo '<hr>';
    echo ceil($num); //Arredonda pra cima
    echo '<hr>';
    echo floor($num); //Arredonda pra baixo
    echo '<hr>';
    echo round($num); //Arredondamento: Até 0.4 = Pra baixo | 0.5 em diante = Pra cima
    echo '<hr>';
    echo rand(); //Gera um número aleatório
    echo '<hr>';
    echo getrandmax(); //Número Máximo do S.O.
    echo '<hr>';
    echo rand(10,20); //Limitação do número aleatório
    echo '<hr>';
    echo sqrt(9); //Raiz Quadrada

    ?>
    
</body>
</html>