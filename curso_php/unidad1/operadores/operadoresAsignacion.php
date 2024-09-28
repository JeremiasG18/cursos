<?php

    // operador de asignacion "="
    $a = 5;

    // operador de asignacion combinado
    $a += 3;

    echo $a;

    echo "<br>";
    
    $b = "Hola ";
    $b .= "Mundo";

    echo $b;

    echo "<br>";

    // asignación por referencia
    $c = 5;
    $d = &$c;

    echo $c . " " . $d;

    $c = 3;

    echo "<br>";

    echo $d;

    // cualquier cambio que se haga en la variable $c tambien se hace en $d

?>