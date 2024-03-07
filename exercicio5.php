<?php

    // Atividade 5

    $primeiroElemento = 1;
    $segundoElemento = 1;

    $elementoSeguinte = 0;
    $x = 0;

    $elemento = 1; 

    echo  "$primeiroElemento, $segundoElemento,";

    while ($elemento < 100) {
        $elementoSeguinte = $primeiroElemento + $segundoElemento;
        $x = $elementoSeguinte + $segundoElemento;

        $elemento = $elemento + 1;
        $primeiroElemento = $elementoSeguinte;
        $segundoElemento = $x; 

        echo "$elementoSeguinte, $x,";
    }

    

?>