<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1> resultado da análise númerica</h1>
    </header>
    <main>
        <?php 
        $Número = $_GET["numero"];      // optei por deixar bem distinguido as variaveis para que eu pudesse modificar o script com facilidade no futuro
        $diferenciador = '1';
        $sucessor = $Número + $diferenciador;
        $antecessor = $Número - $diferenciador ;
        echo "o sucessor do seu número é $sucessor"; echo '<br>';
        echo "o antecessor do seu número é $antecessor";
        ?>
    </main>
    
</body>
</html>