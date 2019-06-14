<?php

function IntervaloNumero ($PrimeiroNumero, $SegundoNumero) {
    if ($PrimeiroNumero > $SegundoNumero) {
        for ($i = $PrimeiroNumero + 1; $i > $SegundoNumero; $i--) {
            $Soma = $Soma + $i;
        }
    }
    if ($PrimeiroNumero < $SegundoNumero) {
        for ($i = $PrimeiroNumero + 1; $i < $SegundoNumero; $i++) {
            $Soma = $Soma + $i;
        }
    }
    return $Soma;
}
print "Digite o primeiro número: ";
$PrimeiroNumero = (int) fgets (STDIN);
print "Digite o segundo número: ";
$SegundoNumero = (int) fgets (STDIN);
$SomaIntervalo = IntervaloNumero ($PrimeiroNumero, $SegundoNumero);
print "\n";
print "A soma dos números do intervalo [" . $PrimeiroNumero . ", " . $SegundoNumero . "] é: " . $SomaIntervalo . "\n";