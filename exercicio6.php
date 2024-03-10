<?php

    // Atividade 6

    $numero = 15;
    $primo = true;
    for ($i=$numero-1; $i > 1; $i--) { 
        if($numero % $i ==0){
            if($primo == true){
                echo "Nâo é primo <br>";        
                echo " Divisivel por: $numero <br>";
                $primo = false;
            }
            echo " Divisivel por: $i <br>";
        }
    }
    if($primo == true){
        echo "É primo";
    }else {
        echo " Divisivel por: 1";
    }
?>