<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funlóes</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Trabalhando com funções</h1>

        <h2>Função como procedimento (ou sub-rotina)</h2>
        <p><i>Procedimentos <b>não retornam</b> nada.</i></p>

        <?php
        function exibirDadosDoAutor(){
            echo"<h3>Fulano D' Tawn</h3>";
            echo "<p><time>".date("d/m/Y"). "</time></p>";
        }
        ?>
        <h3>Chamada do precedimento</h3>
         <?php
         $valor = 500;
         if($valor > 1000){
            exibirDadosDoAutor();
         }
         ?>

         <h3>Outras chamadas</h3>
         <div><?=exibirDadosDoAutor()?></div>
            <ul>
                <li><?=exibirDadosDoAutor()?></li>
                <li><b><?=exibirDadosDoAutor()?></b></li>
            </ul>
        
        <hr>

        <h2>Função com parâmetros (ou argumentos)</h2>
<?php
function somar($valor1, $valor2){
    /*Variável de escopo LOCAL
    Este tipo de variável existe SOMENTE DENTRO da função em que foi declarada. */
    //$total = $valor1 + $valor2;

    /*Retornamos o resultado, ou seja, "mandamos para fora" da função o resultado do que ela fez. */
    //return $total;

//Podemos também aplicar o return direto na expressão (sem uso de variável local)
    return $valor1 + $valor2;
}
?>
        <h3>Chamadas/retornos da função somar</h3>
        <p>Resultado 1: <?=somar(10, 5)?></p>
        <p>Resultado 2: <?=somar(23, 107)?></p>

<?php
//Chamando a função e GUARDANDO o resultado numa variável GLOBAL 
$resultado3 = somar(1250, 788.85);
?>
        <p>Resultado 3: <?=$resultado3?></p>
<?php if ($resultado3 > 2000){ ?>
    <p class="alert alert-success">O resultado 3 é maior que 2000</p>
<?php } else {?>
    <p class="alert alert-danger">Resultado 3 não é maior que 2000</p>
<?php } ?>

    <!-- Usando uma função como parte de uma condição:
     Primeorp, aa função é chamada (e aí ela é calculada e retorna), DEPOIS o resultado que ela retornou é comparado com a condição -->
<?php if(somar(10,50) < 500){?>
    <p>João Pedro reprovado...</p>    
<?php } ?>

    <h3>Funçaõ com parâmetro opcionais</h3>
<?php
/*Parâmetro opcionais posseuem algum tipo de atribuição com um valor alternativo para o caso de não serem passados na camada da funçao. Obs: sempre devem estar ppor último na relaçao de parâmetros da função. */
function exibirSaudacao($mensagem, $pessoa = "fulano(a)"){
    return "Olá, $mensagem $pessoa";
}
?>
        <p>Mensagem 1: <?=exibirSaudacao("Bom dia","João Pedro ")?></p>
        <p>Mensagem 2: <?=exibirSaudacao("Boa tarde")?></p>

        <hr>

        <h2>Introdução de tipos de dados</h2>
<?php
/*Indicando que o parâmetro DEVE ser do tipo inteiro, e que o retorno da função DEVE ser do tipo string. */
function verificarNegativo( int $valor): string{
    
    if($valor < 0){
        return "é negativo";
    }  

    /*Early Return (retorno antecipado) */
        return "não é negativo";

    /*Ao usr Early Return, podemos em algumas situações evitar a necessidade do else (condicional composta). Neste exemplo. se a condição for TRUE o primeiro return é executado. Se não for, na sequência será feito o segundo return. */
}

/*Tipos comuns para uso com introduçao string -> texto/cacteres em geral
int -> números inteiros 
float -> números com casas decimais
array -> veor/matriz 
object -> objeto */
?>
    <p>Número 10: <?=verificarNegativo(10)?></p>
    <p>Número -10: 
        <span class="badge text-bg-danger"><?=verificarNegativo(-10)?></span></p>

        <!-- O código abaixo (tire os cmentários se quiser testar) gera um erro relacionado a induçao de tipos (foi dado um string e era esperado um número inteiro) -->
        <!-- <p>Teste de valor/parâmetro errado: <?=verificarNegativo("Paulo Henrique")?></p> -->

    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>