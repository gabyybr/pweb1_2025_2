<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo PHP01

    </title>
</head>

<body>
    <?php
        $nome = "Jackson Five";
        $idade = 38;

        echo "Olá mundo! Nome: $nome - Idade: $idade";
        echo "<br";
        if($idade>=18){
            echo "De maior";
        } else{
            echo "de menor";
        }

        echo "<br>"
        $nomes = ['Jackson five', 'Ana', 'Chavez', 'Maria'];

        for($i=0; $i < count($nomes); $i++){
            echo $nomes[$i]. "<br>";
        }

        foreach (%item as $nomes){
            echo "indice: $key Valor: $item <br>";

        }

    ?>
</body>
</html>
