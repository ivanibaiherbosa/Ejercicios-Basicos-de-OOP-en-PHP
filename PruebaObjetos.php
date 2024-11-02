<?php

class Coche {

    public string $color;
    public string $marca;


    public function __construct(string $color, string $marca) {

    $this->color = $color;
    $this->marca = $marca;

}

public function mostrarCoche() {
    return "el coche es un " . $this->marca . " de color " . $this->color;
}

}

$coche1 = new Coche ("gris", "mercedes");

echo $coche1->mostrarCoche();

?>