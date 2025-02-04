<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Objetos</title>
</head>
<body>
    <h1>Trabalhando com objetos genéricos</h1>
    <hr>
<?php
/*Criando uma istância de uma classe genérica chamada stClass (Stander Class)*/ 
$usuario = new stdClass(); //instância ou objeto

//Adicionando propriedades/atributos ao objeto
$usuario -> nome = "Chapolin Colorado";
$usuario ->idade = 25;
$usuario -> email = "chapolin@gmail,com";
$usuario ->telefones = ["11-2135-03000", "11-98745-7844"];

//Pode ser usado {} ao redor do objeto/propriedade na interpolação
echo $usuario ->nome;
echo "<p><mark>{$usuario->nome}</mark><p;>"//interpolação

?>    

    <h2>Analisando a estrutura do objeto</h2>
    <pre><?=var_dump($usuario)?></pre>
    <hr>

    <h2>Saída de dados</h2>
    <p>Nome: <?=$usuario-> nome?></p>
    <p>Idade: <?=$usuario-> idade?>anos</p>
    <p>Telefone: <?=$usuario-> telefone[1]?></p>

    <hr>

    <h2>Convertendo (fazendo um casting) um ojeto em um array associativo</h2>

    <?php $arrayUsuario = (array) $usuario;?>

       

    <h2>Convertendo (fazendo um casting) array associativo em objeto</h2>

    <?php
    //Array associativo com duas chaves (nome e sobrenome)
    $aluno = ["nome" => "Fulano", "sobrenome" => "D'Town"]; 
    ?>

<h3>Analisando o array gerado a partir de um objeto</h3>
<pre><?=var_dump($arrayUsuario)?></pre>

    
    
</body>
</html>