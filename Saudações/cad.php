<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <div id="mensagem"></div>
        <?php
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        echo "<p> é um prazer te conhecer $nome $sobrenome! Este é meu site"
        ?>
       </div>
        <script>
            setTimeout(() => {
                var msg = document.getElementById("mensagem");
                //console.log(msg); lembrar desse comando para testar o funcionamento do script
                msg.innerHTML = '';
                //msg.parentNode.removeChild(msg);
            },4000);
       </script>
    </main>
    
</body>
</html>