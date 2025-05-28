<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>
</head>
<body>
    <header>
        <h1>
            O numero sorteado é
        </h1>
    </header>
    <main>
       <div id="sorteio"> <h2> <?php 
        $minimo = $_GET["minimo"];
        $maximo = $_GET["maximo"];
        $resultado = rand($minimo, $maximo);
        //$resultado = array_rand($conjunto); // esqueci o comando para retornar o valor e não a chave
        //print_r($conjunto);
        echo $resultado ;
        ?>
        </h2>
       </div>
        <button onclick="javascript:history.back()">Retornar</button>        <!--Sofri para montar isso porque tentei descobrir como fazer só no html-->
        <button onclick="location.reload()">sortear novamente</button>
        <!--<script>
            function updatediv {
                 $( "sorteio" ).jqLoadGet(window.location.href + " sorteio" );
            }
                                                               vou tentar descobrir como fazer isso funcionar depois
        </script> -->
     

    </main>

</body>
</html>