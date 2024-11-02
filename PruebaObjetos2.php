<?php

class Avion {

    public string $marca;
    public string $modelo;


    public function __construct(string $marca, string $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function mostrarAvion() {
        return "el avion es un " . $this->marca . " modelo " . $this->modelo;
    }
}

$avion1 = new Avion("airbus", "a320");
echo $avion1->mostrarAvion();


?>