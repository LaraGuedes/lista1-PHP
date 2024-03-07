<?php
    // Lista 1

    // Atividade 1

    $area = 1000;
    $coberturaLitro = 3;

    $litroNecessario = ($area / $coberturaLitro);
    $lataNecessaria = ($litroNecessario / 18);
    $latas = ceil($lataNecessaria);

    $valor = ($latas * 120);

    echo "Valor total R$$valor,00";

?>