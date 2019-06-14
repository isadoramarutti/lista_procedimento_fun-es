<?php

function PesoIdeal ($Altura, $Sexo) {
    if ($Sexo == 2) {
        $PesoIdeal = (72.7 * $Altura) - 58; 
    }
    elseif ($Sexo == 1) {
        $PesoIdeal = (62.1 * $Altura) - 44.7;
    }
    print "Seu peso ideal é: " . $PesoIdeal . ". \n";
}
print "Digite sua altura: ";
$Altura = (float) fgets (STDIN);
print "Digite seu sexo [1-Feminino/2-Masculino]: ";
$Sexo = (int) fgets (STDIN);
if ($Sexo != 1 and $Sexo != 2) {
    print "Sexo inválido. \n";
    exit;
}
PesoIdeal ($Altura, $Sexo);