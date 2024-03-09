<?php

    // Atividade 4

    $populacaoA = 8000;
    $taxaCrescimentoA = 0.03;

    $populacaoB = 200000;
    $taxaCrescimentoB = 0.015;

    $anos = 0;

    while ($populacaoA <= $populacaoB) {
        $anos = $anos + 1;
        $populacaoA = $populacaoA * (1 + $taxaCrescimentoA);
        $populacaoB = $populacaoB * (1 + $taxaCrescimentoB);
    };

    echo "$anos"
?>