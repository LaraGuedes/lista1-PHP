<?php

    // Atividade 4

    $populacaoA = 8000;
    $taxaCrescimentoA = 3/100;

    $populacaoB = 200000;
    $taxaCrescimentoB = 1.5/100;

    $anos = 0;

    while ($populacaoA <= $populacaoB) {
        $populacaoA = $populacaoA * $taxaCrescimentoA;
        $populacaoB = $populacaoB * $taxaCrescimentoB;
        $anos = $anos + 1;
    }

    echo "$anos"
?>