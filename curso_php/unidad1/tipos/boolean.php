<?php
    $foo = True;
    echo $foo;

    // == es un operador que comprueba la igualdad y devuelve un booleano
    /*
    if ($accion == "mostrar_version"){
        echo "La version es 1.23";
    }
    */

    // esto no es necesario ...
    /*
    if ($mostrar_separadores == TRUE){
        echo "<hr>\n";
    }
    */

    // ... porque se puede escribir simplemente
    /*
    if ($mostrar_separadores) {
        echo "<hr>\n";
    }
    */

    var_dump((bool) "");
    var_dump((bool) 1);
    var_dump((bool) -2);
    var_dump((bool) "foo");
    var_dump((bool) 2.3e5);
    var_dump((bool) array(12));
    var_dump((bool) array());
    var_dump((bool) "false");
    
?>