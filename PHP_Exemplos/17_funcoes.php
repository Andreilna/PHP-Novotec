<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>

    <h2>Funções</h2>

    <?php
    //VOID 

    function exibirBoasVindas(){
        echo 'Seja bem vindo! <br>';
    }

    exibirBoasVindas();

    //RETURN

    function calcularAreaTerreno($largura, $comprimento){
        $area = $largura * $comprimento;
        return $area;
    }

    echo calcularAreaTerreno(30, 50);

       

    ?>
    
</body>
</html>