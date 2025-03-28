<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - Pesquisas</title>
</head>
<body>

    <?php
      
        $listas_coisas = ['Minecraft', 'Roblox', 'Super Mario Bros', 'The Sims'];

        echo in_array('Minecraft', $listas_coisas);
        // echo in_array('Minecraft', $listas_coisas ['Grupo']);
        // 1  = True  = Existe esse dado
        // "" = False = Não existe

        echo '<hr>';

        echo array_search('Roblox', $listas_coisas);
        // 1    = True = Existe esse dado
        // NULL = 

        // True = Existe esse dado
        // False = Não existe
        // Empty = Essa variável está sem dados
        // NULL = $lista_coisas <> $lista coisas

    ?>
    
</body>
</html>