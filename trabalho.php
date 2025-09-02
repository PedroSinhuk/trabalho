<?php
// Definindo a cor do semáforo
$cor = "amarelo"; // Você pode trocar para "amarelo", "verde" ou qualquer outra cor

// Verificador de semáforo
if ($cor == "vermelho") {
    echo "Pare!";
} elseif ($cor == "amarelo") {
    echo "Atenção!";
} elseif ($cor == "verde") {
    echo "Siga!";
} else {
    echo "Cor inválida.";
}
?>
