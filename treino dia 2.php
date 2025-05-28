<?php
//echo phpinfo();
echo 'com ponto e virgula';
?>
<br>
<?php
$EXISTO = '1752' ;
$EXISTIRA = '53';
?>
<?php
echo $EXISTO * $EXISTIRA;
?> 
<br>
<?php
echo round( $EXISTO / $EXISTIRA, 0);
?> <br>  
<?php
$fixo = '1';
$variavel = '0116';
echo $variavel;?> <br>
 <?php
echo $variavel * $fixo;
?> <br>
<?php
 $teste = 'parabens,você ganhou!'; /* lembrar que aspas simples vai ser fixo e aspas duplo permite o texto transformar*/
 $titulo = "---$teste---\n";
 echo $titulo;
 