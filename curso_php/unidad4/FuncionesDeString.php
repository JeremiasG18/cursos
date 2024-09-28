<?php

    // addcslashes()
    $string = "Hola ¿como estas?";
    $result = addcslashes($string, 'o'); # => agrega un slash por cada letra o
    echo $result;

    echo "<br>";

    // addslashes()
    $str = "O'Reilly? 'Hel \php\'";
    $result = addslashes($str);
    echo $result;

    echo "<br>";

    // bin2hex()
    $cadena = "Hola";
    $hexadecimal = bin2hex($cadena);
    echo $hexadecimal;

    echo "<br>";

    // chop()
    $cadena = "Hola, ¿cómo estás?      ";
    $resultado = chop($cadena);
    echo $resultado;

    echo "<br>";

    // chr()
    echo chr(100);

    echo "<br>";

    // chunk_split()
    $cadena = "Esto es un texto largo que quiero dividir en fragmentos.";
    $resultado = chunk_split($cadena, 8, "|");
    echo $resultado;

    echo "<br>";

    // convert_uudecode()
    echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`");

    echo "<br>";

    // convert_uuencode()
    echo convert_uuencode("Hola mundo xd");

    echo "<br>";

    // count_chars()
    $cadena = "Hooola Mundo!";
    $resultado = count_chars($cadena);
    foreach ($resultado as $caracter => $frecuencia) {
        if ($frecuencia > 0) {
            echo "El carácter '" . chr($caracter) . "' aparece $frecuencia veces.\n" . "<br>";
        }
    }

    echo "<br>";

    // crc32()
    $suma = crc32("El veloz murcielago hindu comia feliz cardillo y kiwi.");
    printf($suma);

    echo "<br>";

    // crypt()
    $cadena = "Hola Josuesses";
    $salt = '$2y$10$' . bin2hex(random_bytes(11)); // Genera un "salt" seguro para BCRYPT
    $result = crypt($cadena, $salt);
    echo $result;

    echo "<br>";

    // echo()
    echo("Se puede se ve hacer esto");

?>