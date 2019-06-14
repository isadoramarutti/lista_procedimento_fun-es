<?php

function ConversaoPolCm ($Pol) {
    $Cm = $Pol * 2.54;
    return $Cm;
}
print "Digie o valor em polegadas que deseja converter: ";
$Polegada = (float) fgets (STDIN);
$Centimetro = ConversaoPolCm ($Polegada);
print "O valor convertido para centímetros é: " . $Centimetro . "cm. \n";