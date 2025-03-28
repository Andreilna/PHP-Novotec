<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 09</title>
</head>
<body>

    <?php
        $picapau = '1';

        switch($picapau){
            case 0:
                echo 'Para ser equipe, precisa ser diferente de 0!';
                break;

            case 1: case 2: case 3:
                echo 'A equipe foi aceita!';
                break;

            default:
                echo 'A equipe não foi aceita!';
                break;
        }
    ?>
    
</body>
</html>