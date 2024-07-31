<?php
function imprimirPiramide($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        
        for ($j = 1; $j <= $altura - $i; $j++) {
            echo " ";
        }

        
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "*";
        }

        echo "\n";
    }
}


$alturaPiramide = 5;
imprimirPiramide($alturaPiramide);
?>