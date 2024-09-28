<?php

    function mostrarElementos(iterable $elementos) {
        foreach ($elementos as $elemento) {
            echo $elemento . PHP_EOL;
        }
    }

    $array = [1, 2, 3];
    $generador = (function () {
        yield 4;
        yield 5;
        yield 6;
    })();

    mostrarElementos($array);        // Imprime: 1 2 3
    mostrarElementos($generador);    // Imprime: 4 5 6

?>