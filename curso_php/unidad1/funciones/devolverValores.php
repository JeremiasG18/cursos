<?php

    // declare(strict_types=1); // sin esta linea de codigo php va a forzar que devuelva un valor entero o integer int

    // function sum($a, $b): int {
    //     return $a + $b;
    // }

    // var_dump(sum(1, 2));
    // var_dump(sum(1, 2.5));


    echo "<br>";

    function getUser(int $id): ?string {
        // Si el usuario no existe, se devuelve null
        if ($id <= 0) {
            return null;
        }
        // Si el usuario existe, se devuelve un nombre de usuario
        return "Usuario_$id";
    }
    
    $resultado = getUser(0); // Esto devolverá null
    var_dump($resultado);    // Salida: NULL
    
?>