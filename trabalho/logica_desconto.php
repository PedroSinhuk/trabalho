<?php
// Definição das variáveis
$valor_compra = 160.00;     
$possui_cupom = false;      

// Especifica se o cliente tem direito ao desconto
$tem_desconto = ($valor_compra > 150 || $possui_cupom);

// Calculo de desconto (10% se verdadeiro, 0% se falso)
$percentual_desconto = $tem_desconto ? 10 : 0;
$valor_desconto = ($percentual_desconto / 100) * $valor_compra;
$valor_final = $valor_compra - $valor_desconto;

// ternario para mensagem
$mensagem = $tem_desconto ? "Desconto aplicado com sucesso!" : "Sem desconto disponível.";

// Exibe os resultados
echo "Valor da compra: R$ " . number_format($valor_compra, 2, ',', '.') . "<br>";
echo "Desconto: $percentual_desconto% <br>";
echo "Valor final a pagar: R$ " . number_format($valor_final, 2, ',', '.') . "<br>";
echo $mensagem;
?>
