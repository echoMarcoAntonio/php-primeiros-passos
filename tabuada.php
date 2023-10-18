<?php

$multiplicador = 5;

echo PHP_EOL;
echo "Exibindo a tabuada do número: $multiplicador" . PHP_EOL;

for ($i = 1; $i <= 10; $i++) {
    $resultado = $multiplicador * $i;
    echo "$multiplicador x $i = $resultado" . PHP_EOL;
}