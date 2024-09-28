<?php

    // operadores de comparacion
    $a = 5;
    $b = 10;

    // igual 
    echo $a == $b; // => 0 o nada " "
    echo "<br>";

    // igual
    echo $a == "5"; // => 1
    echo "<br>";

    // identico
    echo $a === "5"; // => 0 o nada " "
    echo "<br>";

    // mayor que
    echo $a > $b; // => 0 o nada " "
    echo "<br>";

    // menor que 
    echo $a < $b; // => 1
    echo "<br>";

    // mayor o igual que 
    echo $a >= $b; // => 0 o nada " "
    echo "<br>";

    // menor o igual que 
    echo $a <= $b; // => 1
    echo "<br>";

    // distinto
    echo $a != $b; // => 1
    echo "<br>";

    // distinto
    echo $a <> $b; // => 1
    echo "<br>";

    // no identico
    echo $a !== "5"; // => 1
    echo "<br>";

    // no identico
    echo $a !== 5; // => 0 o nada " "


    // nave espacial
    echo "<br>";
    echo 1 <=> 1; // 0
    echo 1 <=> 2; // -1
    echo 2 <=> 1; // 1

    
    // operador ternario
    // Ejemplo de uso para: Operador Ternario
    // $action = (empty($_POST['action'])) ? 'default' : $_POST['action'];

    // // Lo anterior es idéntico a esta sentencia if/else
    // if (empty($_POST['action'])) {
    //     $action = 'default';
    // } else {
    //     $action = $_POST['action'];
    // }


    // practicando mediante el ejemplo de uso del operador ternario
    echo "<br>";

    $a = 1;
    $b = 2;
    $algo = ($a > $b) ? "$a es mayor" : "$b es mayor";
    echo $algo;

    echo "<br>";

    // null coalescing operator => operador de coalescencia nula
    $comparador = $hola ?? 'No se definio la variable $hola';
    echo $comparador;

?>