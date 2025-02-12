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
    $nota1 = 8;
    $nota2 = 7;
    $nota3 = 5;

    function calcularMediaNotas ($nota1, $nota2, $nota3){
        $media = ($nota1 + $nota2+ $nota3) /3;

        return $media;
    };

    function verificarSituacao($media) {
        if ($media >= 7) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }

    $mediaFinal = calcularMediaNotas($nota1, $nota2, $nota3);

    $situacao = verificarSituacao($mediaFinal);

    $classeCor = ($situacao == "Aprovado") ? "text-primary" : "text-danger";
  
    ?>

    <p>Média das notas do aluno foi: <?= $mediaFinal ?></p>
    <p>Situação:
        <b class="badge text-bg-<?=$classeCor >= 7 ? 'success' : 'danger'?>">
            <?=$situacao?>
        </b>
    </p>
    

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>