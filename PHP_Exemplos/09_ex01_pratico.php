<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Prático 01</title>
</head>
<body>

    <?php
        // - Frete Gratuito, se:
        //    - Cartão da loja
        //    - Compra > R$ 100,00
        // - Caso contrario, Frete

        $usuario_possui_cartao_loja = true;

        $valor_compra = 200;

        $valor_frete = 50;

        $recebeu_desconto_frete = false;

        if ( $usuario_possui_cartao_loja == true && $valor_compra >= 100 ){
            $valor_frete = 0;
            $recebeu_desconto_frete = true;
        }

    ?>

    <h1>Detalhes do pedido</h1>
    <p>Possui cartão da loja?</p>

    <?php
        if ( $usuario_possui_cartao_loja == true ){
            echo 'SIM!';
        } else {
            echo 'NÃO!';
        }
    ?>

    <p>Valor da compra: <?= $valor_compra ?></p>

    <p>Recebeu desconto no frete?</p>

    <?php
        if ( $recebeu_desconto_frete == true ){
            echo 'SIM!';
        } else {
            echo 'NÃO!';
        }
    ?>

    <p>Valor do frete: <?= $valor_frete ?></p>
    
</body>
</html>