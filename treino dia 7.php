<!DOCTYPE html>
<html lang="pt-br">              <!--não faço ideia de como chegou a essa bagunça final/minha primeira experiencia em inserir scripts de terceiros-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCAPE DA MATRIX</title>
    <style>
    #banner div { 
    	float: left; 
    	margin: 0 10px; 
    } 
    #banner div p { 
        display: inline; 
        background: #000;                                               
        padding: 5px; 
        margin: 1px; 
        font-size: 40px; 
     
        line-height: 70px; 
        color: #fff; 
        border-radius: 5px; 
        font-family: 'Helvetica'; 
        font-weight: bold; 
    } 
    #banner div span { 
    	display: block; 
        text-align: center; 
        font-family: 'Helvetica'; 
        font-size: 14px; 
    } 
    </style>
</head>
<body>                                   
    <h1>
        <?php
         echo "BEM VINDO A MATRIX"; echo '<br>';
         echo '<br>';   //como fazer esse comando se repetir 2 vezes sem cntrl c+v?
         date_default_timezone_set("America/Sao_paulo");
        echo "Hoje é dia " . date("d/M/Y");                           
        echo " e a hora atual é " . date("G:i:s");
        echo '<br>'; echo '<br>'; echo "você esta preso nela e precisa fazer uma escolha"; echo '<br>'; echo '<br>';
        ?>

        <div id="banner"> 
                <div id="dias"> 
                    <p>0</p> 
                    <p>0</p> 
                    <p>0</p> 
                    <span>Dias<span> 
                </div> 
                <div id="horas"> 
                    <p>0</p> 
                    <p>0</p> 
                    <span>Horas<span> 
                </div> 
                <div id="minutos"> 
                    <p>0</p> 
                    <p>0</p> 
                    <span>Minutos<span> 
                </div> 
                <div id="segundos"> 
                    <p>0</p> 
                    <p>0</p> 
                    Segundos 
                </div> 
            </div> 
    </h1>
    <h2>
        <?php 
        echo "Escapar ou aceita-la"                //como transicionar entre os tamanhos rapido?
        ?>
    </h2>
    <p>Tente quebra-la por dentro!</p>

    <script type="text/javascript">
        var date = new Date(2025,03,24)
     
     function changeTime() { 
      
         var data1 = new Date(); 
         var diff = new Date(date.getTime() - data1.getTime()); 
      
         var dias = Math.round(diff.getTime()/8.64e7); 
         var horas = diff.getUTCHours(); 
         var minutos = diff.getUTCMinutes(); 
         var segundos = diff.getUTCSeconds(); 
      
         document.getElementById("dias").children[0].innerHTML = Math.floor(dias/100); 
         document.getElementById("dias").children[1].innerHTML = Math.floor(dias/10%10); 
         document.getElementById("dias").children[2].innerHTML = dias%10; 
      
         document.getElementById("horas").children[0].innerHTML = Math.floor(horas/10); 
         document.getElementById("horas").children[1].innerHTML = horas%10; 
      
         document.getElementById("minutos").children[0].innerHTML = Math.floor(minutos/10); 
         document.getElementById("minutos").children[1].innerHTML = minutos%10; 
      
         document.getElementById("segundos").children[0].innerHTML = Math.floor(segundos/10); 
         document.getElementById("segundos").children[1].innerHTML = segundos%10; 
     } 
     var temporizador = setInterval( changeTime, 1000); 
    </script>    
    
</body>
</html>