<?php

    $a = 4;
    $b = 4;

    if ($a > $b){
        echo "$a es mayor que $b";
    }elseif ($a == $b){
        echo "$a es igual $b";
    }else{
        echo "$b es mayor que $a";
    }

    if ($a > $b):
        echo "$a es mayor que $b";
    elseif ($a == $b): // si va el else if en esta forma ya no funcionaria
        echo "$a es igual $b";
    else:
        echo "$b es mayor que $a";
    endif;

?>