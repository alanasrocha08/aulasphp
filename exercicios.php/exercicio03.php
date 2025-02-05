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
    $valorCompra = 5100; 

if ($valorCompra > 5000) {
    $desconto = $valorCompra * 0.15;
    $valorFinal = $valorCompra - $desconto;
} elseif ($valorCompra > 3000) { 
    $desconto = $valorCompra * 0.10;
    $valorFinal = $valorCompra - $desconto;
} elseif($valorCompra >1000) {
    $desconto = $valorCompra * 0.05;
    $valorFinal = $valorCompra - $desconto;
} else {
    $desconto = 0;
} 
    $valorFinal = $valorCompra - $desconto;

    echo "Valor final da compra: R$ $valorFinal" 
    ?>

   
    
    
</body>
</html>