<?php 
    // Atividade 2

    $fuzoHorario = new DateTimeZone('America/Sao_Paulo');
    $horaAtual = new DateTime('now', $fuzoHorario);
    $hora = $horaAtual->format('H');
    // echo "$hora";

    if ($hora >= 0 && $hora <= 5) {
        echo "<span style='color: #FF0000; '>'vai dormir...' </span>";
    }

    elseif ($hora > 5 && $hora <= 11) {
        echo "<span style='color: #00FF00; '>'BOM DIA' </span>";
    }

    elseif ($hora > 11 && $hora <= 17) {
        echo "<span style='color: #FFFF00; '>'BOA TARDE' </span>";
    }

    elseif ($hora > 17 && $hora <= 23) {
        echo "<span style='color: #0000FF; '>'BOA NOITE' </span>";
    }

    else {
        echo "<span style='color: #C8A2C8; '>'HORA INVÁLIDA' </span>";
    }
?> 