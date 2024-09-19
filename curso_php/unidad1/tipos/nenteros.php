<?php

    // literales de números enteros => ejemplo 1
    $a = 1234; // número decimal
    $a = -123; // un número negativo
    $a = 0123; // numero octal (equivale a 83 decimal)
    $a = 0x1A; // numero hexadecimal (equivale a 26 decimal)
    $a = 0b11111111; // número binario (equivale al 255 decimal)

    echo $a;

?>

<?php
    // desbordamiento de enteros en sistemas de 32 bit
    $número_grande = 2147483647;
    var_dump($número_grande);                    // int(2147483647)

    $número_grande = 2147483648;
    var_dump($número_grande);                    // float(2147483648)

    $millón = 1000000;
    $número_grande =  50000 * $millón;
    var_dump($número_grande);                    // float(50000000000)
?>

<?php
    // desbordamiento de enteros en sistemas de 64 bit
    $número_grande = 9223372036854775807;
    var_dump($número_grande);                    // int(9223372036854775807)

    $número_grande = 9223372036854775808;
    var_dump($número_grande);                    // float(9.2233720368548E+18)

    $millón = 1000000;
    $número_grande =  50000000000000 * $millón;
    var_dump($número_grande);                    // float(5.0E+19)
?>

<?php
    var_dump(25/7);         // float(3.5714285714286) 
    var_dump((int) (25/7)); // int(3)
    var_dump(round(25/7));  // float(4) 
?>

<?php

    echo (int) ( (0.1+0.7) * 10 ); // ¡muestra 7!

?>