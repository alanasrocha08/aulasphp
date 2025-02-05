<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - condicionais</title>
    <style>
        .comprar{color: red;}

        .urgente{
            color: red;
            background-color: yellow;
        }

        .normal{color: green;}

    </style>
</head>
<body>
    <h1>(VERSÃO 2)Estruturas condicionais</h1>
    <hr>

    <h2>Simples usando <code>if</code></h2>
<?php
$numero = 5;

if($numero > 1){
?>
    <p><?=$numero?> é maior que 1</p>
<?php
}
?>

    <hr>
    <h2>Compostas</h2>
<?php
$produto = "Ultrabook Asus";
$qtdEmEstoque = 0; //o que temos
$qtdCritica = 5; //mínimo necessário
?>

<h3><?=$produto?></h3>
<h4>Quantidade em estoque: <?=$qtdEmEstoque?></h4>

<?php
if ($qtdEmEstoque < $qtdCritica) {
?>

    <p class="comprar">É necessário comprar!</p>

    
    <?php //Condicional ANINHADA 
    if($qtdEmEstoque === 0):
    ?>
        <p class='urgente'><strong>📢URGENTE📢</strong></p>
    <?php
    endif;
        
}else {
?>
    <p class="normal">Estoque normal</p>
<?php
}
?>
    <hr>

    <h2>Encadeadas usando <code>if/eslseif/else</code></h2>
    <!-- Verificar a idade de uma pessoa e determinar se ela é criança, adolecente, adulta ou idosa. -->

    <?php
    $idade = 60;
    if ($idade <= 12) {
        $texto = "Criança";
    } elseif($idade <= 17){
        $texto = "Adolecente";
    } elseif($idade <= 59){
        $texto =  "Adulto";
    } else {
        $texto =  "Idoso";
    }
    ?>
    <p><?=$texto?></p>

</body>
</html>