<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
    <style>
        .parabens{
            color: #770;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <?php
        $valores_obtidos = [];
        $contado = 1;
        $valor = rand(1,6);
        $valores_obtidos[] = $valor;
        while($valor != 6){
            $contado++;
            $valores_obtidos[] = $valor;
            $valor = rand(1,6);
        }
        if(count($valores_obtidos)!=1)$valores_obtidos[] = $valor;

        echo "<p class='parabens'>Parabéns, você ganhou!!!</p>\n";
        echo "<p class='parabens'>Você ganhou na {$contado} tentativa.</p>";
        ?>
        <ol>
            Valores de cada jogada:
            <?php
            foreach($valores_obtidos as $v){
                echo '<li> tentativa: resultado {'.$v.'}</li>';
            }
            ?>
        </ol>
        
</body>
</html>