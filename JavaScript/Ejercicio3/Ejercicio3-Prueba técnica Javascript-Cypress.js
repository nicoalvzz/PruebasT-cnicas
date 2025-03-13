//Defino un array con los nobres de los meses del año
let MesesAño = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

//Defino la posición inicial para recorrer el array, para ello usaré la variable i
let i = 0;

//Uso un bucle do...while para recorrer el array
do {
    //Verifico si el mes actual es "Julio"
    if (MesesAño[i] == "Julio") {
        //Si el mes es Julio, detengo el bucle sin imprimirlo
        break;
  }

  //Muestro el mes actual en la consola
    console.log(MesesAño[i]);

  //Incremento la variable i para pasar al siguiente mes 
    i++;

// La condición del while evita que el bucle se ejecute si el mes actual es "Julio"
} while (i < MesesAño.length); 