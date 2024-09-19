<?php
    echo 'Esto es una cadena sencilla';

    echo "<br>";

    echo 'También se pueden incluir nuevas líneas en
    un string de esta forma, ya que es
    correcto hacerlo así';

    echo "<br>";

    // Resultado: Arnold una vez dijo: "I'll be back"
    echo 'Arnold una vez dijo: "I\'ll be back"';

    echo "<br>";

    // Resultado: Ha borrado C:\*.*?
    echo 'Ha borrado C:\\*.*?';

    echo "<br>";

    // Resultado: Ha borrado C:\*.*?
    echo 'Ha borrado C:\*.*?';

    echo "<br>";

    // Resultado: Esto no se expandirá: \n una nueva línea
    echo 'Esto no se expandirá: \n una nueva línea';

    echo "<br>";

    // Resultado: Las variables $tampoco se $expandirán
    echo 'Las variables $tampoco se $expandirán';

?>

<?php

    $nombre = "JEREMIAS";
    echo <<<cadenaDeCaracteres
     Estoy usando heredoc, es medio feo pero 🤷‍♂️, "puedo entre comillar esto con comillas dobles", 'y simples'
     es medio raro esto con el heredoc. $nombre
    cadenaDeCaracteres;

    echo <<<'cadenaDeCaracteres'
    Estoy usando nowdoc que creo que es peor que heredoc, hasta diria
    que prefiero heredoc en lugar de nowdoc, pero este tambien tiene sus cositas.
    por ejemplo => $nombre
    cadenaDeCaracteres;
?>