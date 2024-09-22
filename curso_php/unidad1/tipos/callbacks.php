<?php

    function saludar()
    {
        echo "Hola Mundo";
    }

    call_user_func('saludar');

    class clase
    {
        static function funcion()
        {
            echo "Hola Mundo";
        }
    }

    echo "<br>";

    call_user_func(array('clase', 'funcion'));

    echo "<br>";

    call_user_func('clase::funcion');

    echo "<br>";

    // otro ejemplo de callbacks
    
    // Nuestro cierre
    $doble = function($a) {
        return $a * 2;      
    };

    // Este es nuestro rango de números
    $números = range(1, 5);

    // Usar el cierre como llamada de retorno para
    // doblar el valor de cada elemento de nuestro
    // rango
    $números_nuevos = array_map($doble, $números);

    print implode(' ', $números_nuevos);

?>