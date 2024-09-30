<?php

    // $i = 1;

    // switch ($i) {
    //     case 0:
    //         echo "i es igual a 0";
    //         break;
    //     case 1:
    //         echo "i es igual a 1";
    //         break;
    //     case 2:
    //         echo "i es igual a 2";
    //         break;
    // }

    // $diaLunesAMiercoles = "Lunesd";
    // switch ($diaLunesAMiercoles) {
    //     case 'Lunes':
    //         echo "Hoy es Lunes";
    //         break;
    //     case 'Martes':
    //         echo "Hoy es Martes";
    //         break;
    //     case 'Miercoles':
    //         echo "Hoy es Miercoles";
    //         break;
    //     default:
    //         echo "No es un dia de la semana";
    //         break;
    // }

    $beer = "pepsi";
    switch($beer)
    {
        case 'tuborg';
        case 'carlsberg';
        case 'heineken';
            echo 'Buena elección';
        break;
        case 'cocacola';
        case 'manaos';
        case 'pepsi';
            echo 'Excelente elección';
        break;
        default;
            echo 'Por favor haga una nueva selección...';
        break;
    }

?>