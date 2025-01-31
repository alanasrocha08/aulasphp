<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Sintaxe Geral</title>
    <style>
        .exemplo{
            color: plum;
            border: solid 4px;
            padding: 4px;
        }
    </style>
</head>
<body>
    <h1>Trabalhando com PHP</h1>
    <hr>

    <?php
        //Geração de strings/textos
        echo "Hoje o Corinthians joga!";

        //Geração de tags e atributos
        echo "<p>Vai ganhar de goleada!<p>";

        //Aspas duplas fora, aspas simples dentro (CORRETO)
        echo "<p><abbr title='Sport Club Corinthians Paulista'>SCCP</abbr></p>";

        //Aspas simples fora, aspas duplas dentro (CORRETO)
        echo '<p><abbr title="Sport Club Corinthians Paulista">SCCP</abbr></p>';

        //Aspas duplas/simples dentro e fora (ERRADO)
        /*echo "<p><abbr title="Sport Club Corinthians Paulista">SCCP</abbr></p>";*/
        /*echo '<p><abbr title='Sport Club Corinthians Paulista'>SCCP</abbr></p>';*/


        //Aspas usanso escape (barrra invertida no começo e fim) (CORRETO)
        echo "<p><abbr title=\"Sport Club Corinthians Paulista\">SCCP</abbr></p>";

        echo "<h2>Brincando <span class=\"exemplo\">PHP</span> </h2>";

        $saudacao = "Olá!";
   ?>

   <script>
        const exemplo = document.querySelector(".exemplo");
        
        exemplo.addEventListener("click", function(){
            alert( "<?php echo $saudacao; ?>");
        });
   </script>

</body>
</html>