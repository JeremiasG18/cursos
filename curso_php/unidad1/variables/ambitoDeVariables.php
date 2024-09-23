<?php

    $a = 1; /* ámbito global */

    function test()
    {
        // echo $a; /* referencia a una variable del ámbito local que no esta definida */
    }

    test(); // por lo que funcion test() no arrojara un valor

    $a = 1;
    $b = 2;

    function Suma()
    {
        global $a, $b; // => accedemos a los valores de las variables a y b atraves de la palabra clave global

        $b = $a + $b;
    }

    Suma();
    echo $b;

    echo "<br>";

    $a = 1;
    $b = 2;

    function Suma2()
    {
        $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
    }

    echo Suma2();
    echo $b;

    echo "<br>";

    // variables estaticas
    function test2()
    {
        static $a = 0;
        echo $a;
        $a++;
    }

    test2();
    echo $a;

    function test3()
    {
        static $count = 0;

        $count++;
        echo $count;
        if ($count < 10) {
            test3();
        }
        $count--;
    
    }

    test3();
    echo "<br>";

    // las referencias no son almacenadas estaticamente

?>