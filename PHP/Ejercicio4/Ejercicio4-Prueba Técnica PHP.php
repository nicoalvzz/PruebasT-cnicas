<?php
//Primero creo la función para obtener la parte del día en la que estamos
function ParteDelDia(): string {
    //Obtengo la hora actual con minutos y segundos (esto es para mostrarlo también luego fuera de la función)
    $hora = date('H');
    $minutos = date('i');
    $segundos = date('s');

    //Determino la parte del día en la que nos encontramos
    if ($hora >= 6 && $hora < 12) {
        $mensaje = 'Buenos días';
    } elseif ($hora >= 12 && $hora < 18) {
        $mensaje = 'Buenas tardes';
    } else {
        $mensaje = 'Buenas noches';
    }

    //Devuelvo el mensaje junto con la hora exacta (lo he añadido para que quede mejor)
    return "$mensaje.<br> La hora actual es: $hora:$minutos:$segundos";
}

// Muestro el mensaje con la hora completa
echo ParteDelDia();
?>
