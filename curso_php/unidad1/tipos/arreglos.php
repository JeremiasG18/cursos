<?php
//  es importante usar un string o numero clave en un array para acceder o agregar un valor al arreglo
    $arr = array(1,3);
    $count = count($arr);
    $arr2 = [
        "fruta" => "manzana",
        "fruta2" => "pera"
    ];

    echo $arr2["fruta"];
    // echo $arr2[fruta]; => esto esta mal
    // echo "Hello $arr2[fruta]"; => esto si esta bien

    echo "<br>";
    $array10 = [1,2,3,4];
    $array11 = [...$array10];
    var_dump($array11);
    echo "<br>";
    $count2 = count($array11);
    echo $count2;
    echo "<br>";
    $array12 = [$array10];
    var_dump($array12);
    echo "<br>";
    $count2 = count($array12[0]);
    echo $count2;
    echo "<br>";
    $arreglo1 = [1, 2, 3, 4, "a" => 5, 4];
    $arreglo2 = [1, 2, 3, 4];
    $arreglo3 = ["a" => 5];
    // $arreglo = [...$arreglo2, ...$arreglo3]; => esto no se puede hacer
    var_dump($arreglo1);

    // un array multidimensional
    $fruits = array ( "fruits"  => array ( "a" => "orange",
                                       "b" => "banana",
                                       "c" => "apple"
                                     ),
                  "numbers" => array ( 1,
                                       2,
                                       3,
                                       4,
                                       5,
                                       6
                                     ),
                  "holes"   => array (      "first",
                                       5 => "second",
                                            "third"
                                     )
                );

    $arr1 = array(2, 3);
    $arr2 = $arr1;
    $arr2[] = 4; // $arr2 ha cambiado,
                // $arr1 sigue siendo array(2, 3)
    
    $arr3 = &$arr1;
    $arr3[] = 4; // ahora $arr1 y $arr3 son iguales
    echo "<br>";
    var_dump($arr1);
    echo "<br>";
    var_dump($arr3);
?>