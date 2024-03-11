<?php

    // Atividade 4

    $populacaoA = 80000;
    $taxaCrescimentoA = 0.03;

    $populacaoB = 200000;
    $taxaCrescimentoB = 0.015;

    $anos = 0;

    while ($populacaoA < $populacaoB) {
        $anos = $anos + 1;
        $populacaoA = $populacaoA + ($populacaoA * $taxaCrescimentoA);
        $populacaoB = $populacaoB + ($populacaoB * $taxaCrescimentoB);
    };

    echo "Irá demorar $anos anos"
?>
