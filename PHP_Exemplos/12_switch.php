<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    
    <?php
        $parametro = '2'; //<> 2 e '2'

        switch($parametro){
            case 1:
                echo 'Entrou no case 1';
                break;

            case 2:
                echo 'Entrou no case 2';
                break;

            case 3:
                echo 'Entrou no case 3';
                break;

            default:
                echo 'Entrou no DEFAULT';
                break;
        }

    ?>

</body>
</html>