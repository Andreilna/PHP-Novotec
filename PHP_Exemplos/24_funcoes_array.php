<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções - Array</title>
</head>
<body>

    <?php
        /*
        $variavel = ['Notebook', 'Teclado'];

        // Verifica se é um array

        $retorno = is_array($variavel);

        if($retorno){
            echo 'É um ARRAY';
        } else {
            echo 'Não é um ARRAY';
        }

        //Array Associativo = Exibir as chaves -----------------------------

        $variavel = [
            1 => 'Notebook',
            2 => 'Teclado',
            10 => 'Desktop'
        ];

        echo '<pre>';
        print_r($variavel);
        echo '</pre>';

        echo '<br>';

        $chaves = array_keys($variavel);

        echo '<pre>';
        print_r($chaves);
        echo '</pre>'; */

        // Ordem Alfabética -----------------------------
        
        /*$variavel = ['Notebook', 'Teclado', 'Desktop'];

        echo '<pre>';
        print_r($variavel);
        echo '</pre>';

        //sort($variavel); //Ordem alfabética

        asort($variavel);

        echo '<pre>';
        print_r($variavel);
        echo '</pre>'; */

        //Unir Array -----------------------------

        /*$variavel1 = ['Windows', 'Unix', 'Android'];
        $variavel2 = ['IOS'];
        $variavel3 = ['Chrome OS'];

        $nova_variavel = array_merge($variavel1, $variavel2, $variavel3);

        asort($nova_variavel);

        echo '<pre>';
        print_r($nova_variavel);
        echo '</pre>';*/

        //Dividir String -----------------------------

        /*$data = '2022/11/09';

        $array_retorno = explode('/', $data);

        echo '<pre>';
        print_r($array_retorno);
        echo '</pre>';

        echo '<hr>';

        echo "$array_retorno[2]/ $array_retorno[1]/ $array_retorno[0]";*/8
        
    ?>
    
</body>
</html>