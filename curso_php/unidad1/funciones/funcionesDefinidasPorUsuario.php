<?php


    // no funciona porque no se a creado la funcion aun
    // saludar();

    function saludar(){
        echo "Hola Mundo";
        function saludar2(){
            echo "Hola Mundo 2";
        }
    }

    saludar();
    echo "<br>";
    saludar2();


    // se pueden hacer funciones recursivas, pero deben estar controladas, osea que tenga un limite de ejecucion
    function recursividad($a)
    {
        if ($a < 20) {
            echo "$a\n";
            recursividad($a + 1);
        }
    }


?>