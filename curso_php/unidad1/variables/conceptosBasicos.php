<?php

    $var = 'Roberto';
    $Var = 'Juan';
    echo "$var, $Var";      // imprime "Roberto, Juan"

    // $4site = 'aun no';      // inválido; comienza con un número
    // $_4site = 'aun no';     // válido; comienza con un carácter de subrayado
    // $täyte = 'mansikka';    // válido; 'ä' es ASCII (Extendido) 228

    echo "<br>";

    $foo = 'Bob';                // Asigna el valor 'Bob' a $foo
    $bar = &$foo;                // Referenciar $foo vía $bar.
    $bar = "Mi nombre es $bar";  // Modifica $bar...
    echo $bar;
    echo "<br>";
    echo $foo;

    echo "<br>";

    $variable_indefinida; // esto no es una buena practica
    echo !isset($variable_indefinida); // comprueba si la variable no esta definida => respuesta: 1 osea verdadero

?>