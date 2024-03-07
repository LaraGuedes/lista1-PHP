<?php

    // Atividade 7

    $valorItem = 1.99;

    $quantidadeItemInicial = 1;
    $quantidadeItemFinal = 50;

    echo "Lojas Quase Dois - Tabela de preços <br/> Preço únitario: R$ 1,99 <br/> QUANTIDADE TOTAL: <br/>";

    while($quantidadeItemInicial <= $quantidadeItemFinal){
        $somaItens = $quantidadeItemInicial * $valorItem;
        echo "$quantidadeItemInicial - $somaItens <br/>";

        $quantidadeItemInicial = $quantidadeItemInicial + 1;
    }
?>