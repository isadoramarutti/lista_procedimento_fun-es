<?php

function MaiorNumero ($PrimeiroNumero, $SegundoNumero) {
    if ($PrimeiroNumero > $SegundoNumero) {
        return $PrimeiroNumero;
    }
    if ($SegundoNumero > $PrimeiroNumero) {
        return $SegundoNumero;
    }
}
print "Digite o primeiro número: ";
$PrimeiroNumero = (float) fgets (STDIN);
print "Digite o segundo número (Deve ser diferente do primeiro): ";
$SegundoNumero = (float) fgets (STDIN);
if ($PrimeiroNumero == $SegundoNumero) {
    print "Os números não podem ser iguais.";
    exit;
}
$MaiorNumero = MaiorNumero ($PrimeiroNumero, $SegundoNumero);
print "O maior número é: " . $MaiorNumero . ". \n";