<?php
    function expressao($n){
        $numeradorInicial = 2;
        $DenominadorInicial = 3;
        $somaFracao = ($numeradorInicial / $DenominadorInicial);

        for ($i = 2; $i < $n; $i++) { 
            $numeradorInicial = ($numeradorInicial + 1);
            $DenominadorInicial = ($DenominadorInicial + 2);

            
            $somaFracao = $somaFracao + ($numeradorInicial/ $DenominadorInicial) ;
        };
        
        return $somaFracao;
    };

    $resultado = expressao(5);
    echo "O valor da espressão é $resultado";
?>