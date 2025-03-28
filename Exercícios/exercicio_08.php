<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
</head>
<body>

    <?php
        

        function calcularImpostoSalario($salario){

            $imposto1 = 7.5;
            $imposto2 = 15;
            $imposto3 = 22.5;
            $imposto4 = 27.5;

            if ( $salario <= 1903.98 ){
                echo 'Ele ele esta isento de impostos!';

            } else if ( $salario >= 1903.99 && $salario <= 2826.65 ){
                $salario1 = ($salario * $imposto1) /100;
                echo 'O salario dele é: <strong>R$'. ($salario). '.<br></strong> Desconto de: <strong>'. ($imposto1). '%. <br></strong> Valor de imposto de: <strong>R$'. round(( $salario1 )) .'.<br></strong> Que fica: <strong>R$'. round(($salario - $salario1)). '.</strong>';
    
            } else if ( $salario >= 2826.66 && $salario <= 3751.05  ){
                $salario2 = ($salario * $imposto2) /100;
                echo 'O salario dele é <strong>R$'. ($salario). '.<br></strong> Desconto de: <strong>'. ($imposto2). '%. <br></strong> Valor de imposto de: <strong>R$'. round(( $salario2 )) .'.<br></strong> Que fica: <strong>R$'. round(($salario - $salario2)). '</strong>.';
    
            } else if ( $salario >= 3751.06 && $salario <= 4664.68  ){
                $salario3 = ($salario * $imposto3) /100;
                echo 'O salario dele é <strong>R$'. ($salario). '.<br></strong> Desconto de: <strong>'. ($imposto3). '% <br></strong> Valor de imposto de: <strong>R$'. round(( $salario3 )) .'<br></strong> Que fica: <strong>R$'. round(($salario - $salario3)). '</strong>.';
    
            } else {
                $salario4 = ($salario * $imposto4) /100;
                echo 'O salario dele é <strong>R$'. ($salario). '.<br></strong> Desconto de: <strong>'. ($imposto4). '% <br></strong> Valor de imposto de: <strong>R$'. round(( $salario4 )) .'<br></strong> Que fica: <strong>R$'. round(($salario - $salario4)). '</strong>.';
            } 

            return $salario;

        }

        echo calcularImpostoSalario(1000);

    ?>
    
</body>
</html>