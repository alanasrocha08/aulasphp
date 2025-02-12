<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 (Condicionais)</title>
</head>
<body>
    <h1>Exercício 03 (Condicionais) - 05/02/2025</h1>
    <hr>
<?php
$valorProduto = 1999;
$desconto = 0;

if ($valorProduto>5000) {
    $desconto = 15;
} elseif ($valorProduto>3000) {
    $desconto = 10;
} elseif ($valorProduto>1000) {
    $desconto = 5;
}

//Caucula desconto
$valorDesconto = ($valorProduto * $desconto)/100;

//Calcula valor final
$valorFinal = $valorProduto - $valorDesconto;

// Formata o valores com duas casas decimais e vírgula para separar os milhar
$valorProdutoFormatado = number_format($valorProduto, 2, ',', '.');
$valorFinalFormatado = number_format($valorFinal, 2, ',', '.');
$valorDescontoFormatado = number_format($valorDesconto, 2, ',', '.');
?>  

<?php
if ($desconto>=5) {?>
    <p>Mega Promoção <br>
    Leve o produto dos seus sonhos com desconto de <?=$desconto?>%. <br>
    Custava R$ <?=$valorProdutoFormatado?>, e voce paga apenas <strong>R$ <?=$valorFinalFormatado?></strong></p>
    <hr>
<?php
} else {?>
    <p>
    Leve o produto dos seus sonhos por apenas <strong>R$ <?=$valorFinalFormatado?></strong></p>
    <hr>
<?php    
}

?>
    
</body>
</html>