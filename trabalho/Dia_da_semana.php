<?php

$dia_semana = 3; 

switch ($dia_semana) {
    case 2:
        echo "Segunda-feira - Dia útil";
        break;
    case 3:
        echo "Terça-feira - Dia útil";
        break;
    case 4:
        echo "Quarta-feira - Dia útil";
        break;
    case 5:
        echo "Quinta-feira - Dia útil";
        break;
    case 6:
        echo "Sexta-feira - Dia útil";
        break;
    case 1:
    case 7:
        echo ($dia_semana == 1) ? "Domingo - Fim de semana!" : "Sábado - Fim de semana!";
        break;
    default:
        echo "Dia inválido!";
        break;
}
?>
