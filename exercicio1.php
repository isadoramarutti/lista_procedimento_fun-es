<?php
// Exercício "Fahrenheit para Celsius".
function Conversao ( $Fahrenheit ) {
    $Celsius  = ( $Fahrenheit  -  32 ) * ( 5 / 9 );
    print  " A temperatura convertida para Graus Celsius é "  .  $Celsius  .  ".\n " ;
}
print  " Digite a temperatura desejada (em Fahrenheit): " ;
$Fahrenheit  = ( float ) fgets ( STDIN );
Conversao ( $Fahrenheit );
