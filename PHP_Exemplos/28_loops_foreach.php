<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops - Foreach</title>
</head>
<body>

    <?php
    
        $itens = ['Sofá ', 'Mesa ', 'Cadeira ', 'Fogão ', 'Geladeira ']; // Array() = []

        foreach($itens as $item){
            echo $item;

            if($item == 'Mesa '){
                echo ' - Compre agora e ganhe 25% de desconto!';
            }

            echo '<br>';

        }

    ?>
    
</body>
</html>