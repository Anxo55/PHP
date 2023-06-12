<?php
/**
 * Crea una clase que represente un Círculo
 * La clase círculo, tendra 3 métodos
 * - Uno para calcular su área
 * - Otro para calcular su perímetro
 * - Otro para calcular su diámetro
 * Crea también su constructor
*/
class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radius;
    }

    public function getDiameter() {
        return 2 * $this->radius;
    }
}

// Ejemplo de uso de la clase Circle
$circle = new Circle(5); // Crear un círculo con radio 5

echo "Área del círculo: " . $circle->getArea() . PHP_EOL;
echo "Perímetro del círculo: " . $circle->getPerimeter() . PHP_EOL;
echo "Diámetro del círculo: " . $circle->getDiameter() . PHP_EOL;