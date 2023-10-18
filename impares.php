<?php

for ($i = 0; $i <= 100; $i++) {
    // se  o resto da divisão do contador por 2 não for igual a 0, o contador é exibido
    if ($i % 2 != 0) {
        echo "#$i" . PHP_EOL;
    }
}
