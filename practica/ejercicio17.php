<?php
/**
 * Crea un programa que calcule el IMC de una persona
 * Busca en la wikipedia como se calcula
 * La función se llamará getIMC y recibirá 2 parametros el peso y la altura
 * la función devolverá un valor decimal
 */

 function getIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}

$peso = 70; // Peso en kilogramos
$altura = 1.75; // Altura en metros

$imc = getIMC($peso, $altura);
echo "El IMC es: " . $imc;

?>