<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - condicionais</title>
    <style>
        .comprar{
            color: red;
        }

        .urgente{
            color: red;
            background-color: yellow;
        }

        .normal{
            color: green;
        }

    </style>
</head>
<body>
    <h1>Estruturas condicionais</h1>
    <hr>

    <h2>Simples</h2>
    <h3 ><code>if</code></h3>
<?php
$numero = 5;

if($numero > 1){
    echo "<p>$numero é maior que 1</p>";
}

//Sintaxe omitindo as chaves
if($numero > 1) echo "<p>$numero é maior que 1<p>";
?>

    <h2>Compostas</h2>
<?php
$produto = "Ultrabook Asus";
$qtdEmEstoque = 0; //o que temos
$qtdCritica = 5; //mínimo necessário

echo "<h3>$produto</h3>";
echo "<h4>Quantidade em estoque: $qtdEmEstoque</h4>";

if ($qtdEmEstoque < $qtdCritica) {
    echo "<p class='comprar'>É necessário comprar!</p>";

    

        //Condicional ANINHADA
        if($qtdEmEstoque === 0){
            echo "<p class='urgente'><strong>📢URGENTE📢</strong></p>";
        }
    }
else {
    echo "<p class='normal'>Estoque normal</p>";
}
?>

    <h2>Encadeadas</h2>
</body>
</html>