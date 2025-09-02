<?php

$peso = 60;      // peso em kg
$altura = 1.63;  

// Cálculo do IMC
$imc = $peso / ($altura * $altura);

// Exibe o IMC
echo "Seu IMC é: " . number_format($imc, 2) . "<br>";

// Classificação do IMC
if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso";
} elseif ($imc >= 18.5 && $imc <= 24.9) {
    echo "Classificação: Peso normal";
} elseif ($imc >= 25 && $imc <= 29.9) {
    echo "Classificação: Sobrepeso";
} else {
    echo "Classificação: Obesidade";
}
?>
