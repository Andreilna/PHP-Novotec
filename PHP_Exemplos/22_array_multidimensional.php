<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Multidimensional</title>
</head>
<body>

    <?php

    $lista_coisas = []; //array()

    $lista_coisas['Frutas'] = ['Maçã,', 'Pêssego', 'Manga', 'Abacaxi'];

    $lista_coisas['Pessoas'] = ['João', 'W', 'Cauã', 'José', 'Maria'];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo '<hr>';

    echo $lista_coisas['Frutas'][3];

    ?>
    
</body>
</html>