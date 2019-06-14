<?php

function Divisivel ($X, $Y) {
    if ($X%$Y == 0) {
        $R = 1;
    }
    else {
        $R = 0;
    }
    return $R;
}
print "Digite o primeiro número: ";
$X = (int) fgets (STDIN);
print "Digite o segundo número: ";
$Y = (int) fgets (STDIN);
$Resposta = Divisivel ($X, $Y);
print "\n";
if ($Resposta == 1) {
    print "O primeiro número é divisível pelo segundo. \n";
}
elseif ($Resposta == 0) {
    print "O segundo número não é divisível pelo segundo. \n";
}