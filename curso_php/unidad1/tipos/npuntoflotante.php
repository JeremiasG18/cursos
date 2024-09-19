<?php
    $a = 1.234; 
    $b = 1.2e3; 
    $c = 7E-10;
    $d = 1_234.567; // a partir de PHP 7.4.0
    var_dump($a);
?>

<?php
    $a = 1.23456789;
    $b = 1.23456780;
    $épsilon = 0.00001;
    var_dump(abs(($a-$b)));

    if(abs($a-$b) < $épsilon) {
        echo "true";
    }
?>

<?php
    echo "<br>";
    $bd = NAN;
    var_dump(is_nan($bd));
    
?>