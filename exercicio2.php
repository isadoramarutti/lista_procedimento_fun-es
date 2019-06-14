<?php

function Hipotenusa ( $CatetoA , $CatetoB ) {
    $Hipotenusa  =  sqrt ( pow ( $CatetoA , 2 ) +  pow ( $CatetoB , 2 ));
    return  $Hipotenusa ;
}
print  " Digite o primeiro Cateto: " ;
$CatetoA  = ( float ) fgets ( STDIN );
print  " Digite o segundo Cateto: " ;
$CatetoB  = ( float ) fgets ( STDIN );
$Pitagoras  = Hipotenusa ( $CatetoA , $CatetoB );
print  " \n " ;
print  " A hipotenusa do triângulo é:  " .  $Pitagoras  .  " .\n " ;