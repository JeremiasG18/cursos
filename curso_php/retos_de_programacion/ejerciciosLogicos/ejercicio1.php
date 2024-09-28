<?php

    /*
        Escribe un programa que muestre por consola (con un print) los numeros de 1 a 100
        (ambos incluidos y con un salto de linea cada impresión), sustituyendo los siguientes:
        - Multiplos de 3 por la palabra "fizz".
        - Multiplos de 5 por la palabra "buzz".
        - Multiplos de 3 y de 5 a la vez por la palabra "fizzbuzz".
     */

     for ($i = 0; $i<=100; $i++){
        
        $mul3 = $i % 3;
        $mul5 = $i % 5;

        if($mul3 === 0 && $mul5 === 0){
            echo "fizzbuzz";
            echo "<br>";
        }elseif($mul3 === 0){
            echo "fizz";
            echo "<br>";
        }elseif($mul5 === 0){
            echo "buzz";
            echo "<br>";
        }else{
            echo $i;
            echo "<br>";
        }

    }

?>