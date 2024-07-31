<?php
function invertirArray($array) {
    return array_reverse($array);
}


$numeros = [1, 2, 3, 4, 5];
$inverso = invertirArray($numeros);
print_r($inverso);
?>