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

    function combinacoes($m, $n){
        $fatorarM = fatorar($m);
        $fatorarN = fatorar($n);
        $fatorialMN = fatorar($m - $n);

        if ($n <= $m){
            $formula = ($fatorarM/($fatorialMN * $fatorarN));
        }

        return $formula;
    }

    $numeroM = 10;
    $numeroN = 5;
    $combinacao = combinacoes($numeroM,$numeroN);
    echo "O resultado da formula da combinação dos números $numeroM e $numeroN é $combinacao"
?>