<?php
// Creo la función para invertir las letras de cada palabra en una frase
function InvertirLetras($frase) {
    // Divido la frase en un array de palabras, para ello usaré la función explode
    $palabras = explode(" ", $frase);

    // Recorro cada palabra del array mediante el bucle foreach
    foreach ($palabras as &$palabra) {
        // Invierto las letras de cada palabra mediante strrev
        $palabra = strrev($palabra);
    }

    // Junto las palabras invertidas en una nueva frase mediante la función implode
    return implode(" ", $palabras);
}

// Creo la variable con la frase a invertir
$frase = "Hola me llamo Nicolás";

// Llamo a la función y guardo el resultado
$fraseInvertida = InvertirLetras($frase);

// Y por último, muestro el resultado
echo "Frase original: ".$frase "<br>";
echo "Frase invertida: ".$fraseInvertida;
?>
