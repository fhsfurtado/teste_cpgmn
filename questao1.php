<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 1</title>
</head>
<body>
    <?php
        // No mock abaixo, colocar o valor desejado para calcular:
        $quantidade = 6; // 6 conforme documento do Desafio;
        $espaço = 0;
        for($i=1;$i<=6;$i++){
            for($j=$quantidade;$j>$i;$j--){
                echo '&nbsp;&nbsp;';
            }
            for($j=0;$j<$i;$j++){
                echo '*';
            }
            echo '<br>';
        }
    ?>
</body>
</html>