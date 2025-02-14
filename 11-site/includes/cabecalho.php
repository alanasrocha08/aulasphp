<?php
/*Captursmos o nome do arquivo atualmente aberto */
$pagina = basename($_SERVER["PHP_SELF"]);

//Analisamos o valor de $pagina para determinar um título personalizado
switch ($pagina){
    case 'index.php':
        $titulo = "Página Inicial";
        break;
    case 'cursos.php':
        $titulo = "Treinamentos";
        break;
    case 'duvidas.php':
        $titulo = "Dúvidas";
        break;
    default:
        $titulo = "Contato";
        break;
    
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?=$titulo?> Site com PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <header>
            <h1>Site com PHP</h1>
            <nav class="text-center">
                <a href="index.php">Home</a>
                <a href="cursos.php">Treinamentos</a>
                <a href="duvidas.php">Dúvidas</a>
                <a href="contato.php">Contato</a>
            </nav>
        </header>

        <main>