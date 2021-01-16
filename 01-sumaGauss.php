<?php

function sumasDeMultiplos($am,$n){
    //$am= 5;
    //$n=1000;
    $m = 1;

    $vlim = $am+($n-$m)*$am;
    $res =  $n*($am+$vlim)/2;
    return $res;
}



echo sumasDeMultiplos(1,100);
