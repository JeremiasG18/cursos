<?php

    $a = 'Hola';
    $$a = 'Mundo';

    echo "$a {$$a}";

    echo "<br>";

    echo "$a $Hola";

    echo "<br>";

    echo $$a[1];

    echo "<br>";

    echo ${$a}[1];


?>