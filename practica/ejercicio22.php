<?php
/**
 * Crea un programa que te indique cuantos días faltan para navidad
 * PISTA: puedes usar la funcion diff de fechas en php
*/
function getDaysToChristmas() {
    $hoy = new DateTime(); // Fecha actual
    $navidad = new DateTime(date('Y') . '-12-25'); // Fecha de Navidad del año actual

    // Compara las fechas y calcula la diferencia
    $diferencia = $hoy->diff($navidad);
    $diasFaltantes = $diferencia->days;

    return $diasFaltantes;
}

// Ejemplo de uso
$dias = getDaysToChristmas();
echo "Faltan $dias días para Navidad.";

?>
