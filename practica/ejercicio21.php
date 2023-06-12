<?php
/**
 * Crea una función que reciba un array 
 * y devuelva uno de los elementos de ese array de forma aleatoria
 * 
*/
function getRandomValue($list) {
    $randomIndex = array_rand($list);
    return $list[$randomIndex];
}

// Ejemplo de uso
$array = [1, 2, 3, 4, 5];
$randomValue = getRandomValue($array);
echo "Valor aleatorio: " . $randomValue;
?>
