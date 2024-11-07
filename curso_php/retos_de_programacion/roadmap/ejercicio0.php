<?php

    // Pagina official de php ⬇⬇⬇
    /* https://www.php.net/ */

    // Formas de crear comentarios en php ⬇⬇⬇
    // comentario de una sola linea
    /*
        comentario de
        multiples lineas
        
     */
    # otro comentario de una sola linea

    // Variables, constantes
    $variable = "Esto es una variable";
    const CONSTANTE = "Esto es una constante";
    define("ALGO", 2);

    // Datos primitivos
    $numero = 4;
    $texto = "texto";
    $valorBooleano = true;
    $flotante = 3.1;
    $array = ['arreglo_con_un_elemento'];
    $arrayAsociativo = [
        "nombre" => "Jeremias",
        "apellido" => "Gonzalez"
    ];
    $arrayMultidimensional = [
        [
            "nombre" => "Jeremias",
            "apellido" => "Gonzalez"
        ],
        [
            "nombre" => "Josue",
            "apellido" => "Torres"
        ]
    ];
    # $objeto = new Object();
    $null = null;
    
    # ejemplo de resource
    # $conexion = mysqli_connect("localhost", "usuario", "contraseña", "base_de_datos"); => esto es un recurso o resource
    # fopen()
    # imagecreate()

    // Mostrar por pantalla
    print "¡Hola, PHP!";
    
?>