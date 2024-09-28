<?php

    // ejemplo de asociatividad
    $a = 3 * 3 % 5; // (3 * 3) % 5 = 4
    // la asociatividad del operador ternario difiere de C/C++
    $a = true ? 0 : true ? 1 : 2; // (true ? 0 : true) ? 1 : 2 = 2

    $a = 1;
    $b = 2;
    $a = $b += 3; // $a = ($b += 3) -> $a = 5, $b = 5

    
    // ejemplo orden de evaluación no definido
    $a = 1;
    echo $a + $a++; // podría mostrar 2 o 3

    $i = 1;
    $array[$i] = $i++; // podría establecer el índice a 1 o 2


    // ejemplo  +, - y . tienen la misma precedencia
    $x = 4;
    // esta línea podría resultar en una salida inesperada:
    echo "x menos uno igual a " . $x-1 . ", o eso espero\n";
    // ya que se evalúa como esta línea:
    echo (("x menos uno igual a " . $x) - 1) . ", o eso espero\n";
    // la precedencia deseada se puede forzar con paréntesis:
    echo "x menos uno igual a " . ($x-1) . ", o eso espero\n";

?>