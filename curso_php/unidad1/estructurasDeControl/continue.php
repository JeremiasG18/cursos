<?php

    // for ($i=0; $i < 4; $i++) { 
    //     if ($i == 2) {
    //         continue;
    //     }
    //     echo $i;
    // }

    for ($i=0; $i < 4; $i++) { 
        for ($j=0; $j < 4; $j++) { 
            if ($i == 2) {
                continue 2;
            }
            echo "valor de J = ".$j. ", valor de I = ".$i."<br>";
        }
        // echo "valor de I = ".$i."<br>";
    }

?>