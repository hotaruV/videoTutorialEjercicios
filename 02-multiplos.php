<?php


function multiplos()
{
    for ($i = 1; $i <= 100; $i++) {
        if($i % 3 == 0 && $i % 5 == 0){
            echo " FOOBAR"."<br>";
        }else if($i % 3 == 0) {
            echo " FOO"."<br>";
        }else if($i % 5 == 0) {
            echo " BAR"."<br>";
        }else{
            echo $i ."<br>";
        }
    }
    
}


multiplos();
