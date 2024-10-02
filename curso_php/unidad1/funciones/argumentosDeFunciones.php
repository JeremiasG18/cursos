<?php

    // se le puede predeterminar un valor al argumento
    function hacer_café($tipo = "capuchino")
    {
        return "Hacer una taza de $tipo.\n";
    }
    echo hacer_café();
    echo hacer_café(null);
    echo hacer_café("espresso");


    // esto no funciona
    // function hacer_yogur($tipo = "acidofilo", $sabor){
    //     return "Hacer yogur de $tipo de sabor $sabor";
    // }

    // echo hacer_yogur("frambueza"); => la funcion de arriba no funciona asi


    // esto si funciona
    function hacer_yogur($sabor, $tipo = "acidofilo"){
        return "Hacer yogur de $tipo de sabor $sabor";
    }

    echo hacer_yogur("frambueza");

    echo "<br>";

    function sum(...$números) {
        $acc = 0;
        foreach ($números as $n) {
            $acc += $n;
        }
        return $acc;
    }

    echo sum(2,3,5,6);

    echo "<br>";

    function saludar($nombre, $apellido){
        echo "Nombre: $nombre <br> Apellido: $apellido";
    }

    saludar(apellido:"Gonzalez", nombre:"Jeremias");

?>