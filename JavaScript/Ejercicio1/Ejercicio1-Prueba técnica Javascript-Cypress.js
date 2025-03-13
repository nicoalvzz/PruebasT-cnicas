// Función para filtrar los números pares que tengo en un array
function FiltrarPares(array) {
    // Uso el método filter() para crear un nuevo array con solo los números pares
    return array.filter(function(numero) {
        return numero % 2 === 0; //Esto lo que hace es mantener solo los números que son divisibles por 2
    });
}

//Defino el array
let numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
//Lamo a la función y guardo el resultado en una variable
let NumerosPares = FiltrarPares(numeros);

// Muestro el array filtrado mediante un console.log para poder visualizar el resultado
console.log(NumerosPares);