<?php

function SemanaCorrespondente ($NumeroDia) {
    if ($NumeroDia == 1) {
        $DiaSemana = "DOM";
    }
    
    if ($NumeroDia == 2) {
        $DiaSemana = "SEG";
    }
    
    if ($NumeroDia == 3) {
        $DiaSemana = "TER";
    }
    
    if ($NumeroDia == 4) {
        $DiaSemana = "QUA";
    }
    
    if ($NumeroDia == 5) {
        $DiaSemana = "QUI";
    }
    
    if ($NumeroDia == 6) {
        $DiaSemana = "SEX";
    }
    
    if ($NumeroDia == 7) {
        $DiaSemana = "SAB";
    }
    
    print "A semana correspondente é: " . $DiaSemana . "\n";
}
print "Digite um número de 1 a 7: ";
$NumeroDia = (int) fgets (STDIN);
if ($NumeroDia < 1 or $NumeroDia > 7) {
    print "Número inválido.";
    exit;
}
SemanaCorrespondente ($NumeroDia);