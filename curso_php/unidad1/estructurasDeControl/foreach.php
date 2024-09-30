<?php

    $arr = [1,2,3,4];
    foreach ($arr as &$valor){
        $valor = $valor*2;
    }

    $arr2 = [
        "Nombre" => "Lionel",
        "Apellido" => "Messi"
    ];

    foreach ($arr2 as $clave => $valor){
        echo $clave . ": ". $valor."<br>";
    }

    /* Ejemplo 4 de foreach: arrays multidimensionales */
    $a = array();
    $a[0][0] = "a";
    $a[0][1] = "b";
    $a[1][0] = "y";
    $a[1][1] = "z";

    foreach ($a as $v1) {
        foreach ($v1 as $v2) {
            echo "$v2\n";
        }
    }

    echo "<br>";

    /* Ejemplo 5 de foreach: arrays dinámicos */

    foreach (array(1, 2, 3, 4, 5) as $v) {
        echo "$v\n";
    }

    echo "<br>";

    $array = [
        [1, 2],
        [3, 4],
    ];
    
    // array anidado
    foreach ($array as list($a, $b)) {
        // $a contiene el primer elemento del array interior,
        // y $b contiene el segundo elemento.
        echo "A: $a; B: $b\n";
    }

    echo "<br>";

    // esto de abajo ⬇⬇⬇, es lo mismo que lo de arriba ⬆⬆⬆
    $array = [
        [1, 2],
        [3, 4],
    ];
    
    foreach ($array as [$a, $b]) {
        echo "A: $a; B: $b\n";
    }
?>
