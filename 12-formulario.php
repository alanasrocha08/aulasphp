<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário - PHP</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Formulário</h1>
        <hr>
        <form action="processa-post.php" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input required class="form-control" type="text" name="nome" id="nome">
        </div>
        <div class="mb-3">
            <label  for="email">E-mail:</label>
            <input required ="form-control" type="email" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="idade">Idade:</label>
            <input class="form-control" type="number" name="idade" id="idade" min="1" max="100">
        </div>
        <div class="mb-3">
            <p>Interesses:</p>
            <input type="checkbox" name="interesses[]" id="html" value="HTML">
            <label for="html">HTML</label>
            
            <input type="checkbox" name="interesses[]" id="css" value="CSS">
            <label for="css">CSS</label>

            <input type="checkbox" name="interesses[]" id="js" value="JS">
            <label for="js">JS</label>
        </div>

        <div class="mb-3">
            <p>Deseja receber informativos ?</p>

            <input required type="radio" name="informativos" id="sim" value="Sim">
            <label for="sim">Sim</label>

            <input type="radio" name="informativos" id="não" value="não">
            <label for="não">Não</label>

        </div>

        <div class="mb-3">
            <label for="mensagem">Mensagem:</label>

            <textarea class="form-control" name="mensagem" id="mensagem" cols="30" rows="6"></textarea>
        </div>
        <button class="btn btn-primary" type="submit" name="enviar">Enviar dados</button>
    </form>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>