<?php

$altura = 1.80;
$peso = 63;

$imc = $peso /  $altura ** 2;

echo "Seu IMC é de: $imc kg/m2." . PHP_EOL;
echo  "Classificação: ";

if ($imc <= 18.5) {
    echo "Abaixo do peso." . PHP_EOL;
} else if ($imc  <= 24.9) {
    echo "Peso Normal." . PHP_EOL;
} else if ($imc  <= 29.9) {
    echo "Sobrepeso." . PHP_EOL;
} else if ($imc  <= 34.9) {
    echo "Obesidade Grau I." . PHP_EOL;
} else if ($imc  <= 39.9) {
    echo "Obesidade Grau II." . PHP_EOL;
} else {
    echo "Obesidade Grau III / Mórbida." . PHP_EOL;
}