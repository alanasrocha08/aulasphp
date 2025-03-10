<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 loops</title>
    <style>
            table {
    width: 50%; 
    border-collapse: collapse; 
    margin: 20px auto; 
    font-family: Arial, sans-serif;
}

caption {
    font-size: 1.5em;
    font-weight: bold;
    margin-bottom: 10px;
}

th, td {
    border: 1px solid #ccc; 
    padding: 10px;
    text-align: left;
}

th {
    background-color: #f4f4f4;
    font-weight: bold;
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
