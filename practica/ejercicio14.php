<?php
/**
*Dado un texto $data que contiene una frase con 
*números separados por el caracter ':'
*Mostrar por pantalla la suma de todos esos numeros
* Pasos:
* - Convierte primero la cadena de texto a un array (usa la funcion explode https://www.php.net/manual/es/ref.strings.php)
* - Recorre el array y ve sumando sus distintos valores
* - Muestra por pantalla el resultado
*/

$data = '3:56:2.5:33';

// Convierte la cadena de texto en un array utilizando el carácter ':' como separador
$array = explode(':', $data);

// Inicializa una variable para almacenar la suma de los números
$suma = 0;

// Recorre el array y suma sus valores
foreach ($array as $valor) {
    $suma += floatval($valor); // Convierte cada valor a número y lo suma a la variable $suma
}

// Muestra por pantalla el resultado
echo "La suma de los números es: " . $suma;
?>