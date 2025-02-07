<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 loops</title>
    <style>
        .titulo{
            background-color: grey;
            color: black;
        }       
    </style>
</head>
<body>
    <h1>Exercício 04 (Loop e Estrutura de Dados)</h1>

<table>
        <caption>Linguagens</caption>
        
            <tr class="titulo">
                <th>ID</th>
                <th>Linguagem</th>
                <th>Descrição</th>
            </tr>
        
<?php
    $linguagens = [
        "HTML" => "Estruturação",
        "CSS" => "Estilos",
        "JS" => "Comportamentos",
        "PHP" => "Back-End",
        "SQL" => "Manipulação de dados",
        "Java" => "Softwares"
    ];

    $id = 1;
    foreach ($linguagens as $linguagem => $descricao) {
        ?>
        <tr>
            <td><?=$id?></td>
            <td><?=$linguagem?></td>
            <td><?=$descricao?></td>
            </tr>
<?php
    $id++;}
?>
    </table>
</body>
</html>
