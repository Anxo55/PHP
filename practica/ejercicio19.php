<?php
/**
 * Pinta un arbol de navidad en pantalla usando caracteres assci
 * A la función se le pasará el parametro de la altura
 * el parametro algura solo podrá ser un número impar

 ej: Arbol con altura 3
  *
 ***
*****


 ej: Arbol con altura 5
    *
   ***
  *****
 *******
*********

 */

 function drawChristmasTree($altura) {
   // Verifica si la altura es un número impar
   if ($altura % 2 == 0) {
       echo "La altura debe ser un número impar.";
       return;
   }

   // Itera por cada fila del árbol
   for ($fila = 1; $fila <= $altura; $fila++) {
       // Calcula el número de espacios y asteriscos en cada fila
       $espacios = $altura - $fila;
       $asteriscos = 2 * $fila - 1;

       // Imprime los espacios en blanco
       for ($i = 0; $i < $espacios; $i++) {
           echo " ";
       }

       // Imprime los asteriscos
       for ($i = 0; $i < $asteriscos; $i++) {
           echo "*";
       }

       // Imprime un salto de línea
       echo PHP_EOL;
   }
}

// Ejemplo de uso
$altura = 5;
drawChristmasTree($altura);

?>


