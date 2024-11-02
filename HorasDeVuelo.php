<?php

class Vuelo {

    private string $avion;
    private int $horasVuelo;

    public function __construct(string $avion, int $horasVuelo){
        $this->avion = $avion;
        $this->horasVuelo = $horasVuelo;
    }

    public function getAvion () : string {
        return $this->avion;
    }

    public function setAvion (string $avion) {
        $this->avion = $avion;
    }

    public function getHorasVuelo () : int {
        return $this->horasVuelo;
    }

    public function setHorasVuelo (int $horasVuelo) {
        $this->horasVuelo = $horasVuelo;
    }

    public function puedeVolar () : bool {
        return $this->horasVuelo >= 4000;
    }
}

$avion1 = new Vuelo ("airbus", 400);



if ($avion1->puedeVolar()) {
    echo "el avion no puede volar";
} else {
    echo "el avion puede volar";
}



?>