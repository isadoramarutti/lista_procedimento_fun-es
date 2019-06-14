<?php

function  Media ( $Nota1 , $Nota2 ) {
    $Media  = ( $Nota1  +  $Nota2 ) / 2 ;
    return  $Media ;
}
print  " Digite a primeira nota: " ;
$Nota1  = ( float ) fgets ( STDIN );
print  " Digite uma segunda nota: " ;
$Nota2  = ( float ) fgets ( STDIN );
$Media_Aluno  = Media ( $Nota1 , $Nota2 );
print  " \n " ;
if ( $Media_Aluno  >  10  or  $Media_Aluno  <  0 ) {
    print  " Média inválida. \ n " ;
    saída ;
}
elseif ( $Media_Aluno  >=  6 ) {
    print  " PARABÉNS! Você foi aprovado! \n " ;
}
else {
    print  " Você foi reprovado. \n" ;
}