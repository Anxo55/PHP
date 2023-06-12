<?php
/**
 * Basandote en el ejercicio anterior, ejer17
 * Crea una función que devuelva la Clasificación del IMC de la OMS
 * Delgadez severa, Delgadez moderada, Delgadez leve, ...
 * Mira la wikipedia
 */

 function getIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return $imc;
}

function getClasification($peso, $altura) {
    $imc = getIMC($peso, $altura);

    if ($imc < 16.0) {
        return "Delgadez severa";
    } elseif ($imc >= 16.0 && $imc < 17.0) {
        return "Delgadez moderada";
    } elseif ($imc >= 17.0 && $imc < 18.5) {
        return "Delgadez leve";
    } elseif ($imc >= 18.5 && $imc < 25.0) {
        return "Normal";
    } elseif ($imc >= 25.0 && $imc < 30.0) {
        return "Sobrepeso";
    } elseif ($imc >= 30.0 && $imc < 35.0) {
        return "Obesidad tipo I";
    } elseif ($imc >= 35.0 && $imc < 40.0) {
        return "Obesidad tipo II";
    } else {
        return "Obesidad tipo III";
    }
}

$peso = 70; // Peso en kilogramos
$altura = 1.75; // Altura en metros

$clasificacion = getClasification($peso, $altura);
echo "La clasificación del IMC es: " . $clasificacion;

?>


