<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incremento/ Decremento</title>
</head>
<body>

    <h3>Incremento</h3>

    <?php
    //Pós-Incremento

        $a = 7;

        echo "O valor atual em A é $a <br>";
        $a++;   
        echo "O valor agora em A é $a";

    ?>

    <?php
    //Pré-Incremento

    $a = 7;

    echo "O valor atual em A é $a <br>";
    echo 'O valor agora em A é $a'. ++$a;

    ?>

    <!-- 
        Decremento:
    
        Pós = $a-- ryuko matoi
        Pré = --$a
    -->
    
</body>
</html>