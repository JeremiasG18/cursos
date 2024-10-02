<?php

declare(ticks=1);

function tick_handler() {
    echo "Tick\n";
}

register_tick_function('tick_handler');

$a = 1;
$b = 2;
$c = $a + $b;  // Aquí se llamará a la función 'tick_handler'

echo $c;

// es re raro el declare en php 🤷‍♂️

?>