
<?php
    //$data = date("d/m/y");
    //$hora = date("H:i");
    
// Definir o locale como 'pt_BR' (português do Brasil)
setlocale(LC_TIME, 'pt_BR.UTF-8');

// Criar um objeto DateTime
$data = new DateTime();

// Usar IntlDateFormatter para formatar a data por extenso
$fmt = new IntlDateFormatter('pt_BR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
$data_extenso = $fmt->format($data);

//echo $data_extenso;

 
?>
    <footer>
    <p> <?=$data_extenso?></p>
    <!-- <p>Hora: <?=$hora?></p> -->
    <p>Site criado para o curso Téc. Informática para Internet</p>
    </footer>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>