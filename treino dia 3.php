<?php $cor = array(1 => "vermelho", 2 => "verde", 3 => "azul");
echo $cor[2];        /* aplicação simples de um array em vez de fazer $cor[x]= tantantan um monte de vezes */
echo '<br>';
$saladadefruta = array("maca","uva","pera");
print_r($saladadefruta); print sizeof($saladadefruta);
echo '<br>';
array_push($saladadefruta, "tomate");
print_r($saladadefruta); print sizeof($saladadefruta);
echo '<br>';
array_unshift($saladadefruta,"abacate"); /*quando eu quero deslocar todos os numeros da cadeia*/
print_r($saladadefruta); print sizeof($saladadefruta);
/*$salada_de_menos_fruta =(somente se eu quiser fazer um conjunto dos elementos removidos*/ array_shift($saladadefruta);
echo '<br>';  
print_r($saladadefruta); print sizeof($saladadefruta);
?> <br> <?php
array_pop($saladadefruta);
print_r($saladadefruta); print sizeof($saladadefruta);
echo '<br>';
/*$random =  new \Random\Randomizer();
echo implode($random => pickArrayKeys($saladadefruta,2)); */
$frutadesalada = array_reverse($saladadefruta);
print_r($frutadesalada); print sizeof($saladadefruta);
echo '<br>';
array_rand(array_flip($saladadefruta),2); // nâo entendi o porque não ativou
print_r($saladadefruta); print sizeof($saladadefruta);