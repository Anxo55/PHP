
 
<!DOCTYPE html>
<html>
<head>
    <title>Multiplicación</title>
</head>
<body>
    <h1>Multiplicación de dos valores</h1>
    <form method="GET" action="">
        <label for="valor1">Valor 1:</label>
        <input type="number" name="valor1" id="valor1" required>
        <br><br>
        <label for="valor2">Valor 2:</label>
        <input type="number" name="valor2" id="valor2" required>
        <br><br>
        <input type="submit" value="Multiplicar">
    </form>
 
    <?php
       /**
 * Crea una pagina web en PHP que reciba por $GET 2 valores
 * El programa los multiplicará y mostrará el resultado por pantalla
*/
    
    if (isset($_GET['valor1']) && isset($_GET['valor2'])) {
        $valor1 = $_GET['valor1'];
        $valor2 = $_GET['valor2'];
        $resultado = $valor1 * $valor2;
        echo "<h2>El resultado de la multiplicación es: $resultado</h2>";
    }
    ?>
</body>
</html>

