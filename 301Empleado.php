<?php

//301Empleado.php : Crea una clase Empleado con su nombre, apellidos y sueldo.
//Encapsula las propiedades mediante getters/setters y añade métodos para:
//Obtener su nombre completo → getNombreCompleto(): string
//Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando
//el sueldo es superior a 3333€) → debePagarImpuestos(): bool



class Empleado {

private string $nombre;
private string $apellido;
private float $sueldo;

public function __construct(string $nombre, string $apellido, float $sueldo) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->sueldo = $sueldo;
}

public function getNombre() : string {
    return $this->nombre;
}

public function setNombre(string $nombre) {
    $this->nombre = $nombre;
}

public function getApellido() : string {
    return $this->apellido;

}

public function setApellido (string $apellido) {
    $this->apellido=$apellido;
}

public function getSueldo() : float {
    return $this->sueldo;
}

public function setSueldo(float $sueldo) {
    $this->sueldo=$sueldo;
}


public function getNombreCompleto() : string {
    return "el nombre del trabajador es: " . $this->nombre . " " . $this->apellido;
}

public function debePagar() : bool {
    return $this->sueldo >= 3333;

}

}

$empleado1 = new Empleado ("ivan", "herbosa", "4444");

//-------------------------------------

echo $empleado1->getNombreCompleto();

if ($empleado1->debePagar()) {
    echo "el trabajador debe pagar";
} else {
    echo "el trabajador no debe pagar"
}

?>