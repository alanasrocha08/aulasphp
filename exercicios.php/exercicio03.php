<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 Condicionais</title>
</head>
<body>
    <h1>Compra aplicando descontos</h1>
    <hr>

    <?php
    //entrada de dados (simulada)
    $valorCompra = 5100; 

if ($valorCompra > 5000) {
    $desconto = 0.15;
} elseif ($valorCompra > 3000) { 
    $desconto = 0.10;
} elseif($valorCompra >1000) {
    $desconto = 0.05;
} else {
    $desconto = 0;
} 
$valorFinal = $valorCompra - $valorCompra * $desconto
    ?>
    <p>Valor final da compra é: <?=$valorFinal?></p>

</body>
</html>