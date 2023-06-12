<?php
/**
 * Crea un programa que muestre por pantalla el área y el perímetro de un círculo de radio R
 * Para ello crea una clase Circle
 * Esta clase tendrá los atributos radio y color
 * Esta clase tendrá también 2 metodos getArea y getPerimeter que calcularán respectivamente el área y el perímetro
 * Busca en internet cual es la formula para realizar los cálculos
 * ------------------------------------------
 * Crea un formulario html que el usuario pueda rellenar, con el campo (input) radio y un boton submit
 * Cuando el usuario envie el formulario se mostrará por pantalla el área y perímetro de ese círculo
*/

class Circle {
    private $radio;
    private $color;

    public function __construct($radio, $color) {
        $this->radio = $radio;
        $this->color = $color;
    }

    public function getArea() {
        return pi() * pow($this->radio, 2);
    }

    public function getPerimeter() {
        return 2 * pi() * $this->radio;
    }

    public function getColor() {
        return $this->color;
    }
}

if (isset($_POST['submit'])) {
    $radio = $_POST['radio'];
    $color = $_POST['color'];

    $circle = new Circle($radio, $color);
    $area = $circle->getArea();
    $perimeter = $circle->getPerimeter();
    $color = $circle->getColor();
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Área y Perímetro de un Círculo</title>
    </head>
    <body>
        <h1>Área y Perímetro de un Círculo</h1>
        <h2>Resultado:</h2>
        <p>Radio: <?php echo $radio; ?></p>
        <p>Color: <?php echo $color; ?></p>
        <p>Área: <?php echo $area; ?></p>
        <p>Perímetro: <?php echo $perimeter; ?></p>
    </body>
    </html>

    <?php
} else {
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Área y Perímetro de un Círculo</title>
    </head>
    <body>
        <h1>Área y Perímetro de un Círculo</h1>
        <form method="POST" action="">
            <label for="radio">Radio:</label>
            <input type="number" name="radio" id="radio" required>
            <br><br>
            <label for="color">Color:</label>
            <input type="text" name="color" id="color" required>
            <br><br>
            <input type="submit" name="submit" value="Calcular">
        </form>
    </body>
    </html>

    <?php
}
?>
