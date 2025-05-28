<?php
$numero = $_POST;
if ($numero == 9){
    echo "parabéns você digitou o numero correto";        //a principio esta certo mas eu nâo estou conseguindo criar um lugar para a pessoa
}                                                          //escolher um numero para o comando ativar
else
{
    echo "tente novamente";
}
switch ($i) {
    case $i != 0:                                       //não estou conseguindo executar o sinal "diferente de" 
        print "i é não nulo";                          
    case $i > 0:                                           //nesse codigo a melhor opção seria utilizar while? ja que eu quero que ele avalie
        print "i é um número positivo";                 //o numero por completo algo do estilo "x é não nulo e é um numero positivo"
    case $i < 0:
        print "i é numero negativo";
} echo '<br>';
/*while ($i) {
    $I != 0 echo "é um número não nulo";
    $i > 0 echo " e positivo";
    $i < 0 echo " e negativo";
} endwhile; echo '<br>';*/