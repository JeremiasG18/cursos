<p>Esto va a ser ignorado por PHP y mostrado por el navegador.</p>
<?php
    echo "Mientras que esto va a ser interpretado.";
?>
<p>Esto tambien será ignorado por PHP y mostrado por el navegador.</p>

<!-- ejemplo 2 -->

<?php 
    $expresion = true;
    if($expresion == true):
?>
    Esto se mostrara si la expresion es verdadera.
<?php else: ?>
    En caso contrario se mostrará esto.
<?php endif; ?>

<?php
    // 1
    echo "Si quiere proveer codigo PHP a documentos XHTML o XML, emplee estas etiquetas";
?>

<!-- 2 - Puede emplear la etiqueta echo abreviada para ⬇⬇⬇ -->
<?= "Imprimir esta cadena";?>

<!-- Es equivalente a esto ⬇⬇⬇ -->
<?php echo "Imprimir esta cadena" ?>

<!-- 3 -->
<?
    // este codigo esta dentro de etiquetas abreviadas y funcionara si short_open_tag está habilitada
    // no es muy recomendable para ciertos proyecto lee la documentacion en el apartado de "Salir de HTML"
    echo "Hola mundo";
?>

<!-- 4 Estas formas de enlazar codigo php fueron eliminadas en la version de php 7.0.0 
    <% %> -> <script language="php"> </script>
-->
