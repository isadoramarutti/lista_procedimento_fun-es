<?php

function Poligonos ($Quantidade_Lados, $Medida_Lados) {
    if ($Quantidade_Lados == 3) {
        $Perimetro = $Medida_Lados * 3;
        $MSG = "TRIÂNGULO, perímetro: " . $Perimetro . ". \n";
    }
    elseif ($Quantidade_Lados == 4) {
        $Area = pow ($Medida_Lados, 2);
        $MSG = "QUADRADO, área: " . $Area . ". \n";
    }
    else {
        $MSG = "PENTÁGONO. \n";
    }
    return $MSG;
}
print "Digite a quantidade de lados do polígono regular [APENAS 3, 4 OU 5]: ";
$Quantidade_Lados = (int) fgets (STDIN);
if ($Quantidade_Lados != 3 and $Quantidade_Lados != 4 and $Quantidade_Lados != 5) {
    print "Quantidade de lados inválido. \n";
    exit;
}
print "Digite a medida dos lados em cm: ";
$Medida_Lados = (float) fgets (STDIN);
$Mensagem = Poligonos ($Quantidade_Lados, $Medida_Lados);
print "\n";
print $Mensagem;