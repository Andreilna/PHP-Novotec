<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas - Datas</title>
</head>
<body>

    <?php

    /*
    
    //Funções retiradas de php.net

    echo date('d'); //Dia
    echo '<hr>';
    echo date('D'); //Dia da semana com 3 letras
    echo '<hr>';
    echo date('d/m/Y H:i'); //Formato 03/11/2022
    echo '<hr>';
    echo date_default_timezone_get(); //Retorna o Fuso horário
    echo '<hr>';

    echo date_default_timezone_set('America/Sao_Paulo');
    echo '<hr>';
    echo date('d/m/Y H:i'); 
    
    */

    $data_inicial = '2022-01-01';
    $data_final = '2022-11-03';

    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);

    $diferenca_datas = $time_final - $time_inicial;

    echo 'A diferença é de ' .$diferenca_datas/ (24*60*60). ' dias.'; //Horas*Minutos*Segundos

    ?>
    
</body>
</html>