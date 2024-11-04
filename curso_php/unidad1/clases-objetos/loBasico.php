<?php

    // Creando una clase (Conexion)
    class Conexion{
        
        // Metodo (guardar)
        public function guardar($consulta){
            echo "Datos Guardados <br>";
            echo "Esta es la consulta a realizar $consulta";
        }

    }

    // Creo la instancia de una clase (Conexion)
    $conexion = new Conexion();
    $conexion->guardar("SELECT * FROM personas");

    echo "<br>";

    // Lo de arriba es lo mismo que esto
    $conexion2 = (new Conexion())->guardar("SELECT * FROM personas");

?>