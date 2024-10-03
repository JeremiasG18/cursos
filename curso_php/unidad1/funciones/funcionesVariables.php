<?php

    // Ejemplo 1
    function saludar() {
        echo "Hola Mundo";
    }

    $saludo = 'saludar';
    $saludo();

    echo "<br>";

    // Ejemplo 2
    class Accion{
        function saludar(){
            echo "Hola Mundo";
        }
    }
    
    $metodo = 'saludar';
    $objeto = new Accion();
    $objeto->$metodo();

    echo "<br>";

    // Ejemplo 3
    class Foo{
        static $variable = "propiedad estatica";
        static function Variable(){
            echo "Metodo variable llamado";
        }
    }
    echo Foo::$variable;
    $variable = "Variable";
    Foo::$variable();

    echo "<br>";

    // Ejemplo 4
    class Foo2
    {
        static function bar()
        {
            echo "bar\n";
        }
        function baz()
        {
            echo "baz\n";
        }
    }

    $func = array("Foo2", "bar");
    $func(); // imprime "bar"
    $func = array(new Foo2, "baz");
    $func(); // imprime "baz"
    $func = "Foo2::bar";
    $func(); // imprime "bar" a partrid de PHP 7.0.0; antes, emitía un error fatal

?>