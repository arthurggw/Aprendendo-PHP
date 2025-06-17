<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversão</title>
</head>

<body>
    <header>
        <h1>
            Conversor de moeda simples
        </h1>
    </header>
    <main>
        <?php
         function obterTaxa($moeda) {
            switch ($moeda) {
                case "Euro":
                    return 6.23;
                case "Dolar":
                    return 5.64;
                case "Iene":
                    return 0.0389;
                case "Real":
                    return 1;
                default:
                    return 1;
            }
         }
         function coletivo($portugues) {
            switch ($portugues) {
                case "Euro":
                    return "Euros";
                case "Dolar":
                    return "Dolares";
                case "Iene":
                    return "Ienes";
                case "Real":
                    return "reais";
                default:
                    return "reais";
            }
         }
        $base = $_GET["base"];
        $converter = $_GET["converter"];
        $numero = floatval($_GET["numero"]);
        $taxa_Base = obterTaxa($base);
        $taxa_Converter = obterTaxa($converter);
        
        if ($taxa_Converter != 0) {
            $resultado = $numero * $taxa_Base;
            $conversao = $resultado / $taxa_Converter;
            $moeda_Base = coletivo($base);
            $moeda_Converter = coletivo($converter);
            echo "Seus $numero $moeda_Base serão " . number_format($conversao, 2, ',', '.') . " $moeda_Converter";
        } else {
            echo "Erro na conversão: insira um valor para converter";
        }
        ?>
    </main>
</body>

</html>