<?php
//Creo la función para encontrar el número más grande en un array
function EncontrarNumMax($numeros) {

    //Verifico si el array está vacío
    if (empty($numeros)) {
        return "Error el array proporcionado está vacío";
    }

    //Devuelvo el número más grande usando la función max()
    return max($numeros);
}

//Creo un array con números
$numeros = array(20,10,5,24);

//LLamo a la función y muestro el resultado
$resultado = EncontrarNumMax($numeros);
echo "Los números del array son: " . implode(", ", $numeros);
echo "<br>";
echo "<br>";
echo "El número más grande en el array es: " . $resultado;
?>