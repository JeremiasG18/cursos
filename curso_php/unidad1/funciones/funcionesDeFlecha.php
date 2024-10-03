<?php

    // Ejemplo 1
    $y = 1;

    // fn1 equivale a fn2
    $fn1 = fn($x) => $x + $y;

    $fn2 = function ($x) use ($y) {
        return $x + $y;
    };

    echo $fn1(3);

    echo "<br>";

    // Ejemplo 2
    $z = 1;
    $fn = fn($x) => fn($y) => $x * $y + $z;
    // Outputs 51
    var_export($fn(5)(10));

    echo "<br>";

    // Ejemplo 3
    $var = 3;
    $fun = fn():int => ++$var;
    echo $fun();

?>