<?php

    // $a = 0;
    // while ($a <= 10) {
    //     echo $a;
    //     if ($a == 5) {
    //         break;
    //     }
    //     $a++;
    // }

    for ($i=0; $i < 4; $i++) { 
        for ($j=0; $j < 4; $j++) { 
            if ($i == 1) {
                break 2;
            }
            echo "valor de J = ".$j. ", valor de I = ".$i."<br>";
        }
        // echo "valor de I = ".$i."<br>";
    }

?>