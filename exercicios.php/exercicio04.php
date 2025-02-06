<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 loops</title>
</head>
<body>
    <h1>Exercício 04 (Loop e Estrutura de Dados)</h1>
    <?php
$linguagens = [
    "HTML" => "Estruturação",
    "CSS" => "Estilos",
    "JS" => "Comportamentos",
    "PHP" => "Back-End",
    "SQL" => "Manipulação de dados",
    "Java" => "Softwares"
];

foreach($linguagens as $linguagem => $apelido)
{?>
    <p><?=$linguagem?>: <?=$apelido?></p>
<?php
}
?>

    
</body>
</html>
