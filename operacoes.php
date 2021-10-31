<?php

echo "<p> <b> Operações Básicas <b> </p>";

$nota1 = 9.5;
$nota2 = 7.0;
$nota_final = $nota1 + $nota2;
$media = $nota_final / 2;
$media_formatado = number_format($media, 2, ',', '.');
echo "<p> Sua média é $media_formatado </p>";

$valorPago = 250.0;
$valorCompra = 85.5;
$troco = $valorPago - $valorCompra;
$troco_formatado = number_format($troco, 2, ',', '.');
echo "<p> Seu troco R$ $troco_formatado </p>";

$precoUnitario = 15.00;
$quantidade = 3;
$total = $precoUnitario * $quantidade;
$total_formatado = number_format($total, 2, ',', '.');
echo "<p> Total R$ $total_formatado </p>";

$valorcompra = 150.00;
$parcelas = 3;
$valorParcela = $valorcompra / $parcelas;
$valorParcela_formatado = number_format($valorParcela, 2, ',', '.');
echo"<p> O valor das parcelas R$ $valorParcela_formatado </p>";

$dividendo = 7;
$divisor = 2;
$resto = $dividendo % $divisor;
echo "<p> Resto $resto </p>";
