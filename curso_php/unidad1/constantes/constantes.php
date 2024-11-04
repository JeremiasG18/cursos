<?php

    // las constantes se definen de esta forma
    define("NAME", "jeremias");
    const NAME2 = "Jeremias";

    echo NAME;
    echo NAME2;

    // tambien se pueden definir arreglos como constantes
    const ARREGLO = array("gato", "perro", "loro");
    define("ARREGLO2", array("gato", "perro", "loro"));

    var_dump(ARREGLO);
    var_dump(ARREGLO2);

    

?>