<?php

    // cadena de caracteres
    $nombre = "Jeremias";
    // comillas dobles
    $saludo = "Hola $nombre, como te va?";
    // comillas simples
    $saludo2 = 'Hola $nombre, como te va?';
    // heredoc = comillas dobles
    $saludo3 = <<<saludo
    Hola $nombre,
    como te va?
    saludo;
    // nowdoc = comillas simples
    $saludo4 = <<<'saludo'
    Hola $nombre,
    como te va?
    saludo;

    echo $saludo;
    echo "<br>";
    echo $saludo2;
    echo "<br>";
    echo $saludo3;
    echo "<br>";
    echo $saludo4;
    echo "<br>";

    // sintaxis simple
    $fruta = "manzana";
    echo "Tengo un par de {$fruta}s.".PHP_EOL;

    echo "<br>";

    // sintaxis compleja (llaves)
    $genial = "fantastico";
    echo "Esto son los 4-{$genial}s.".PHP_EOL;

    echo "<br>";

    // los string funcionan como arreglo
    $str = "Hello";
    $primer = $str[0];
    echo $primer;

    echo "<br>";

    // contacatenar con '.'(punto), el signo '+' no servira
    $concatenacion = "Hello"."World";
    echo $concatenacion;
    // $concatenacion2 = "Hello" + "World"; => esto no funciona
    // echo $concatenacion2;

    echo "<br>";

    // conversion de string a numero
    $foo = 1 + "10.5";                   // $foo es float (11.5)
    $foo = 1 + "-1.3e3";                 // $foo es float (-1299)
    // $foo = 1 + "bob-1.3e3";              // $foo es integer (1)
    // $foo = 1 + "bob3";                   // $foo es integer (1)
    // $foo = 1 + "10 pequeños cerdos";     // $foo es integer (11)
    // $foo = 4 + "10.2 pequeños cerditos"; // $foo es float (14.2)
    // $foo = "10.0 cerdos " + 1;           // $foo es float (11)
    // $foo = "10.0 cerdos " + 1.0;         // $foo es float (11)     
    echo $foo;

?>