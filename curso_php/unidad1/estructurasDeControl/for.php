<?php

    // ejemplo1
    for ($i=0; $i <= 10; $i++) { 
        echo $i."<br>";
    }

    // ejemplo2
    for ($i = 1; ; $i++) {
        if ($i > 10) {
            break;
        }
        echo $i."<br>";
    }

    // ejemplo3
    $i = 1;
    for (; ; ) { 
        if ($i > 10) {
            break;
        }
        echo $i."<br>";
        $i++;
    }

    // ejemplo4
    for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i."<br>", $i++);

    // esto no lo ejecutes solo mira el codigo
    // esto esta bien pero se puede mejorar ⬇⬇⬇
    // for($i = 0; $i < count($people); ++$i) {
    //     $people[$i]['salt'] = mt_rand(000000, 999999);
    // }

    // esto esta mas optimizado ⬇⬇⬇
    // for($i = 0, $size = count($people); $i < $size; ++$i) {
    //     $people[$i]['salt'] = mt_rand(000000, 999999);
    // }

?>