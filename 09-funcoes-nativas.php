<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Usando funções nativas</h1>
        <hr>

        <h2>Strings</h2>
        <h3><code>trim()</code></h3>
        <p>Remove espaços antes e depois de strings</p>
<?php
$texto = "  Paulo Henrique está me devendo paçocas     ";
$textoSemEspço = trim($texto);
?>
<pre><?=var_dump($texto)?></pre>
<pre><?=var_dump($textoSemEspço)?></pre>
        <hr>

        <h3><code>str_replace()</code></h3>
        <p>Permite substituir partes de uma string.</p>
<?php
$fraseFeia = "Esse Paulo é um bobão";
$fraseBrunitinha = str_replace(
    ["bobão"],
    ["😒"],
    $fraseFeia
);
?>
        <p><?=$fraseFeia?></p>
        <p><?=$fraseBrunitinha?></p>

        <hr>

        <h3><code>explode()</code></h3>
        <p>Transformar uma string em um array</p>
<?php
$textosLinguagens = "HTML,CSS,JS,PHP,SQL";
$arrayLinguagens = explode(",",$textosLinguagens);
?>
    <pre><?=var_dump($textosLinguagens)?></pre>
    <pre><?=var_dump($arrayLinguagens)?></pre>
    <hr>

    <h2>Arrays</h2>

    <h3><code>implode()</code></h3>
    <p>Transforma array em string</p>
<?php
$arrayBandas = ["Rush", "Slayer", "Dio"];
$textoBandas = implode(" - ", $arrayBandas);
?>

    <pre><?=var_dump($arrayBandas)?></pre>
    <pre><?=var_dump($textoBandas)?></pre>
    <hr>

    <h3><code>extract()</code></h3>
    <p>Extrai</p>
    <?php
    $aluno = [
        "id" => 1,
        "nome"=> "Chapolin Colorado",
        "idade" => 25
    ];
     
    extract($aluno);
    ?>
        <ul>
            <li>ID: <?=$id?></li>
            <li>Nome: <?=$nome?></li>
            <li>Idade: <?=$idade?></li>
        </ul>

        <hr>

        <h3><code>array_sum()</code></h3>
        <p>Somar valores de um array numérico</p>
<?php
$valores = [10, 20,50, 1000, 500];
$total = array_sum($valores);
?>
        <p>Soma do valores do array: <b><?=$total?></b></p>
<?php
$produtos = ["TV", "Notebook", "TV", "Geladeira", "Monitor", "Mouse", "Notbook", "Webcam"];

$produtosUnicos = array_unique($produtos);
?>
        <pre><?=var_dump($produtos)?></pre>
        <pre><?=var_dump($produtosUnicos)?></pre>

        <h2>Numéricas</h2>
        <h3><code>main(), max(), round()</code></h3>
<?php
//Vamos usar o mesmo array de valores criando mais acima...
$valorQualquer = 1259.75;
?>
        <p>Menor valor: <?=min($valores)?></p>
        <p>Maior valor: <?=max($valores)?></p>
        <p>Arredomdamento: <?=round($valorQualquer)?></p>

        <h2>Filtros</h2>
        <p>Recursos/Funções/Constantes de análise e limpeza de dados aplicados através das funções <code>filter_var()</code> e <code>filter_input()</code></p>

        <h3>Validação</h3>
<?php
//Exemplo de email estruturado erroneamente
$emailErrado = "alana.com.br";
$emailCorreto = "alanasr02@gmail.com"
?>
        <p><?=var_dump(filter_var($emailErrado, FILTER_VALIDATE_EMAIL))?></p>
        <p><?=var_dump(filter_var($emailCorreto, FILTER_VALIDATE_EMAIL))?></p>
        <hr>

        <h3>Sanitização</h3>
<?php
$ataqueDeRaqui = "<script>
    document.body.innerHTML ='<h1 style=background:yellow><marquee loop>Sou ráqui !<>/marquee>/h1>>'<?script>";

//echo $ataqueDeRaqui;

$ataqueSanitizado = filter_var($ataqueDeRaqui, FILTER_SANITIZE_SPECIAL_CHARS);
echo $ataqueSanitizado;
?>
<hr>
<h1>Segurança (criptografia de dados)</h1>
<h3>Algorítmos recursos</h3>

<ul>
    <li>MD5</li>
    <li>SHA-1</li>
    <li>SHA-256</li>
    <li>passawoed_hash() e password_verify()</li>
</ul>

<?php
//plain text
$senhaTextoPuro = "123senac";

//MD5
$senhaCodificadaComMD5 = md5($senhaTextoPuro);
$senhaCodificadaComSHA1 = sha1($senhaTextoPuro);
$senhaCodificadaComSHA256 = hash('sha256', $senhaTextoPuro);
?>

<hr>
<p>Senha (texto puro): <?=$senhaTextoPuro?></p>
<p>Senha (MD5):
    <?=$senhaCodificadaComMD5?> (<?=strlen($senhaCodificadaComMD5)?>)</p>
    <p>Senha (SHA-1):
    <?=$senhaCodificadaComSHA1?> (<?=strlen($senhaCodificadaComSHA1)?>)</p>
    <p>Senha (SHA-256):
    <?=$senhaCodificadaComSHA256?> (<?=strlen($senhaCodificadaComSHA256)?>)</p>

    <hr>

    <p class="alert alert-success"><i>Método/Algoritmo ideal atualmente</i></p>
<?php
$senhaCodificada = password_hash($senhaTextoPuro, PASSWORD_DEFAULT);
?>
    <p>Senha codificada com <code>password_hash()</code>:
    <?=$senhaCodificada?> (<?=strlen($senhaCodificada)?>)
    </p>

    <h4>Comparando a senha informada com a senha codificada</h4>
<?php
//Simulandoa digitação de senha num formulário
$senhaDigitada = "123senac";
if(password_verify($senhaDigitada, $senhaCodificada) ){
    echo "Senha correta, pode entrar...";
} else{
    echo"Senha errada! Some daqui...";
}
?>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>