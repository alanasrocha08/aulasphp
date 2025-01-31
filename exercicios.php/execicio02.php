<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 Arrays</title>
    <style>
        .container {
        display: flex;
        gap: 20px; /* Espaço entre os blocos */
}

    .pessoa {
    background-color:plum;
    padding: 10px;
    border-radius: 8px; /* Cantos */
}

    h2 {
    color:darkcyan; /* Cor do título */
}

    p {
    color:darkcyan; /* Cor do texto */
    font-size: 16px;
}

    </style>
</head>
<body>
    <h1>Crie dois arrays para duas pessoas fictícias</h1>
    <hr>

    <?php
    $pessoa1 = ["alana.srocha","alanasr@gmail.com", "Alana123", 16, "feminino", "São Paulo" ];
    $pessoa2 = ["julia.amoura", "juliaam@gmail.com", "Julia123", 17, "feminino", "São Paulo"];
    ?>
<div class="container">  
    <div class="pessoa">
        <h2>Acessando os dados da pessoa 1</h2>
            <p>nome de usuário: <?=$pessoa1[0]?>
            <br>
            email: <?=$pessoa1[1]?>
            <br>
            idade: <?=$pessoa1[3]?> anos
            <br>
            sexo: <?=$pessoa1[4]?>
            <br>
            cidade: <?=$pessoa1[5]?></p>

    </div> 
    <div class="pessoa">
        <h2>Acessando os dados da pessoa 2</h2>
            <p>nome de usuário: <?=$pessoa2[0]?>
            <br>
            email: <?=$pessoa2[1]?>
            <br>
            idade: <?=$pessoa2[3]?>anos
            <br>
            sexo: <?=$pessoa2[4]?>
            <br>
            cidade: <?=$pessoa2[5]?></p>
    </div>
</div>  
        
</body>
</html>