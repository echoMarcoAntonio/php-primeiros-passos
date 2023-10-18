<?php

$idade = 16;
$numPessoas = 3;

echo PHP_EOL;

echo "Você só pode entrar sozinho caso possua acima de 18 anos." . PHP_EOL;
echo "É permitida a entrada de menores caso possuam 16 anos ou mais e estejam acompanhados." . PHP_EOL;

echo PHP_EOL;

if ($idade >= 18) {
    echo "Você possui $idade anos. Entrada liberada!" . PHP_EOL;
} else if ($idade >= 16) {
    if ($numPessoas > 1) {
        echo "Você possui $idade anos e está acompanhado(a). Entrada liberada!" . PHP_EOL;
    } else {
        echo "Você possui $idade anos e não está acompanhado(a). Entrada bloqueada!" . PHP_EOL;
    }
} else {
    if ($numPessoas > 1) {
        echo "Você possui $idade anos, mas é muito jovem para entrar mesmo com acompanhante. Entrada bloqueada!" . PHP_EOL;
    } else {
        echo "Você possui $idade anos e não está acompanhado(a). Entrada bloqueada!" . PHP_EOL;
    }
}
