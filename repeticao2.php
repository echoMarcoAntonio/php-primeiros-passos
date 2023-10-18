<?php

for ($contador = 1; $contador <= 15; $contador++) {
    if ($contador == 12) {
        continue;
    }
    if ($contador == 14) {
        break;
    }

    echo "#$contador" . PHP_EOL;
}

/*
$contador = $contador + 1;
$contador += 1;
$contador++;
*/