<?php

    // ejemplo de instanceof => comprueba si es una clase instanciada

    class UnaClase
    {
    }

    class OtraClase
    {
    }

    $a = new UnaClase();

    var_dump($a instanceof UnaClase);
    var_dump($a instanceof OtraClase);

    // otro ejemplo de instanceof => comprueba si es heredada la clase
    class UnaClasePadre
    {
    }

    class UnaClaseHijo extends UnaClasePadre
    {
    }

    $b = new UnaClaseHijo();
    var_dump($b instanceof UnaClaseHijo);
    var_dump($b instanceof UnaClasePadre);

    // Finalmente, instanceof también se puede utilizar para determinar si una variable es un objeto instanciado de una clase que implementa una interface:

    interface MyInterface
    {
    }

    class MyClass implements MyInterface
    {
    }

    $a = new MyClass;

    var_dump($a instanceof MyClass);
    var_dump($a instanceof MyInterface);

    

?>