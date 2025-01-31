<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 PHP e HTML</title>
    <style>
        .cor{
            color: yellowgreen;
            padding: 4px;
        }
    </style>
</head>
<body>
    <h1>Variáveis</h1>
    <hr>

    <?php
    $data = "30-01-2025"; 
    $nome = "Alana Silva Rocha"; 
    $curso = "Gastronomia"; 
    $cargaHoraria = 1000;
    $limiteDeFaltas = $cargaHoraria * 0.25;

    echo "<h2>Saída das informações (variáveis)</h2>";

    echo "<p>Hoje, dia $data, a aluna $nome concluiu com sucesso o curso técnico de <b class = 'cor'>$curso</b>, com $cargaHoraria horas e limite de faltas de $limiteDeFaltas horas. Quer saber mais sobre o curso ? Clique aqui</p>";
    ?>

    <hr>

    <h1>Constantes</h1>
    <hr>

    <?php
    //Definindo o timezone (fuso horário)
    date_default_timezone_set("America/Sao_Paulo");

    
    const NOME = "Alana Silva Rocha";
    $data = date("d/m/y");
    $hora = date("h:i");
    echo $data. "-".$hora;
    
    $curso = "Gastronomia";
    $cargaHoraria = 1000;
    $limiteFaltas = $cargaHoraria * 0.25;
    ?>

    <h2>Saída das informações (constantes)</h2>
    <p>Me chamo <?=NOME?> e hoje estou concluindo o curso de <?=$curso?> que tem <?=$cargaHoraria?> horas que me permite ter <?=$limiteFaltas?> horas como limite de faltas.</p>

    <hr>

    <?php
    /*Diferenças entre cont/define e variável */

    //Variável
    $exemplo = 10;
    echo $exemplo;
    echo "<br></br>";

    $exemplo = 15;
    echo $exemplo; 

    echo "<br></br>";

    //Constante
    const EXEMPLO = 10;//da erro pois constantes NÃO PODEM SE MODIFICADAS
    //echo EXEMPLO;

    //EXEMPLO = 200;
    ?>

    
</body>
</html>
