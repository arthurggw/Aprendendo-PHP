<?php 
$array = array( "a","b","c");
list($a,$b, $c) = $array;
echo $a; echo '<br>';
array_push($array, range(10,99));         //não entendi oque deu errado, a principior era para eu ter arrays com os nomes $a,$b e $c,logo
//array_push($b, "range(100,999);");       //eu poderia atribuir mais valores a ele?
//array_push($c,"Range(1000-9999);");*/
echo '<pre>';
print_r($array);
echo '</pre>';
class teste {
    function nada(){
        echo "nada";                     //nâo entendi como isso funcionou e para que serve
    }
}
$php = new teste;
$php ->nada();
