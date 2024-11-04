<?php

    // Creando la clase padre (Conexion)
    class Conexion{

        public function guardar($consulta){
            echo "Datos Guardados <br>";
            echo "Esta es la consulta a realizar $consulta";
        }

    }

    // Heredando la clase conexion
    class Persona extends Conexion{

        public string $nombre;
        public string $apellido;

        public function __construct($nombre, $apellido) {
            $this->nombre = $nombre;
            $this->apellido = $apellido;
        }

        public function guardarPersona(){
            if ($this->nombre == "" && $this->apellido == ""){
                echo "No se pueden guardar los datos";
            }else{
                $consulta = "INSERT INTO personas(nombre, apellido) VALUES ($this->nombre, $this->apellido)";
                $this->guardar($consulta);
            }
        }
    }

    // Creando Variables
    $nombre = "Jeremias";
    $apellido = "Gonzalez";
 
    // Inicializando los objetos
    $persona = new Persona($nombre, $apellido);
    $persona->guardarPersona();

    echo "<br>";

    $persona2 = new Persona("Leonardo", "Gonzalez");
    $persona2->guardarPersona();

    echo "<br>";

    $persona3 = (new Persona("Josue", "Gonzalez"))->guardarPersona();

    echo "<br>";

    $año = (new DateTime())->format('Y');
    echo $año;
    
?>