<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>

    <?php
    
    //Array são listas ordenadas:

    $frutas = 'Abacaxi';
    $frutas2 = 'Tomate';
    $frutas3 = 'Morango';
    $frutas4 = 'Pitaya';

    //Sequencias/Numéricos
    $frutas = array('Abacaxi', 'Tomate', 'Morango', 'Pitaya');
    //$frutas = ['Abacaxi', 'Tomate', 'Morango', 'Pitaya'];

    echo '<pre>'; //Tag especifica para Array
    print_r($frutas); //Exibir estrutura Array
    echo '</pre>';
    
    echo $frutas[1];    

    echo '<br>';

    //Associativo

    $listas_frutas = array(
        'a' => 'Maracujá',
        'b' => 'Banana',
        'c' => 'Uva',
        'd' => 'Maçã',
    );

    $listas_frutas['w'] = 'Acerola'; //Acrescentar

    echo '<pre>';
    var_dump($listas_frutas);
    echo '</pre>';

    ?>
    
</body>
</html>