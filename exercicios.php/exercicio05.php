<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 05: FUNÇÕES </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <h1>Exercício 05: FUNÇÕES</h1>
    <p></p>

    <?php
    $aluno = "Kelly"; 
   
    $calcularMediaDasNotas = function (float $nota1, float $nota2, float $nota3){
        $mediaDasNotas = ($nota1 + $nota2+ $nota3) /3;

        return $mediaDasNotas;
    };
  
    ?>

    <p>Média das notas do aluno <?= $aluno ?> foi: <?= $calcularMediaDasNotas ?></p>
    

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>