<?php

function MesCorrespondente ($NumeroMes) {
    if ($NumeroMes == 1) {
        $Mes = "Janeiro";
    }
    
    elseif ($NumeroMes == 2) {
        $Mes = "Fevereiro";
    }
    
    elseif ($NumeroMes == 3) {
        $Mes = "Março";
    }
        
    elseif ($NumeroMes == 4) {
        $Mes = "Abril";
    }    
    
    elseif ($NumeroMes == 5) {
        $Mes = "Maio";
    }    
    
    elseif ($NumeroMes == 6) {
        $Mes = "Junho";
    }    
    
    elseif ($NumeroMes == 7) {
        $Mes = "Julho";
    }    
    
    elseif ($NumeroMes == 8) {
        $Mes = "Agosto";
    }    
   
    elseif ($NumeroMes == 9) {
        $Mes = "Setembro";
    }    
    
    elseif ($NumeroMes == 10) {
        $Mes = "Outubro";
    }    
    
    elseif ($NumeroMes == 11) {
        $Mes = "Novembro";
    }    
    
    elseif ($NumeroMes == 12) {
        $Mes = "Dezembro";
    }
    print "\n";
    print "O mês correspondente ao número escolhido é: " . $Mes . "\n";
}
print "Escolha um número de 1 a 12: ";
$NumeroMes = (int) fgets (STDIN);
if ($NumeroMes > 12 or $NumeroMes < 1) {
    print "Número inválido. \n";
    exit;
}
MesCorrespondente ($NumeroMes);