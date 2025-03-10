<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Operadores Lógicos</title>
</head>
<body>
    <h1>Relembrando Operadores Lógicos</h1>
    <hr>

    <h2>&& (E/AND)</h2>
    <p><i>Todas as condições precisam ser <b>VERDAEIRAS/TRUE</b></i></p>
<?php
/*Avaliar um aluno mediante média e faltas */
$media = 9.5;
$faltas = 10;

if ($media >= 7 && $faltas <= 10) {
?>
    <p>Aprovado (a)</p>
<?php
} else {
?>
    <p>Reprovado(a)</p>
<?php
}
?>
<hr>

    <!-- o símbolo | é chamado de pipe -->
    <h2>|| (OU/OR)</h2>
    <p><i>Basta que apenas uma função seja <b>VERDADEIRA/TRUE</b></i></p>
<?php
/*Dar um desconto a um cliente que seja VIP ou que tenha cupom */
$clienteVIP = true; //valor/tipo lógico/boolean
$temCupom = false;

if ($clienteVIP || $temCupom) {
?>
    <p>Desconto aplicando!</p>
<?php
} else {
?>
  
    <p>Sem desconto</p>
<?php
}
?>

<hr>

    <h2>! (NÃO/NOT)</h2>
    <p><i>É uma inversão de lógica: VERDADEIRO vira <b>FALSO</b>, FALSO vira <b>VERDADEIRO</b></i></p>
<?php
/*Se o usuário NÃO ESTIVER logado, exibir o link/botão de LOGIN. Caso contrário, exibir uma saudação. */
$usuarioLogado = false;

if (!$usuarioLogado) {
?>  
    <a href ="login.php">Login</a>
<?php
} else {
?>
    <span>Bem-vindo(a) ao sistema!</span>
<?php
}
?>

    <hr>
    <h2>Usando os 3 operadores combinados para uma lógica mais elaborada</h2>
<?php
/*Para entrar numa festas pe necessário atender os seguintes creitérios:
- Idade mínima de 18 anos
- OU estar acompanhado (a) dos pais
- E não estar bêbado */

//Variáveis
$idade = 20;
$acompanhadoDosPais = true;
$estarBebado = true;

if (($idade >= 18 || $acompanhadoDosPais) && ! $estarBebado) {
?>
    <p>entrada permitida</p>
<?php    
} else {
?>
    <p>entrada negada</p>
<?php    
}
?>
    
</body>
</html>