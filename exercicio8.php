<?php
    function fatorar ($numero){
        $i = 1;
        $fatorial = 1;

        while ($i <= $numero) {
            $fatorial = $fatorial * $i;
            $i = $i + 1;
        };

        return $fatorial;
    };

    $valorFatorar = 10;
    $numeroFatorado = fatorar($valorFatorar);
    echo "O fatorial do $valorFatorar é $numeroFatorado"
?>