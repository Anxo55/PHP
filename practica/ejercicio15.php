<?php
/**
*Crea una función llamada validateDNI() 
*a la cual le puedas padar un dni en formato texto
*La función devolverá true o false si el DNI está correctamente formado
* - Supondremos que el DNI está bien cuando tenga una longitud de 9 caracteres
* - El último caracter sea una letra del alfabeto
*/

/**
 * Pista: La función ctype_alpha (https://www.php.net/manual/es/function.ctype-alpha.php)
 * nos dice si un caracter es un caracter alfabético.
 */

 function validateDNI($dni){
    // Verifica si la longitud del DNI es igual a 9 caracteres
    if (strlen($dni) === 9) {
        // Obtiene el último carácter del DNI
        $lastCharacter = substr($dni, -1);

        // Verifica si el último carácter es una letra del alfabeto utilizando ctype_alpha()
        if (ctype_alpha($lastCharacter)) {
            return true; // El DNI está correctamente formado
        }
    }
    
    return false; // El DNI no cumple con las condiciones
}

echo validateDNI('36234543N') ? 'Es válido' : 'No es válido';