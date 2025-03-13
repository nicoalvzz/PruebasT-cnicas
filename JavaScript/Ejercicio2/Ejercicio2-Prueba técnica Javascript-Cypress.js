// Función para invertir una cadena de texto
function InvertirCadena(texto) {
    // Convierto la cadena en un array de caracteres, para ello uso split('')
    let ArrayCaracteres = texto.split('');

    // Invierto el array de caracteres, para ello uso reverse()
    let ArrayInvertido = ArrayCaracteres.reverse();

    // Uno los caracteres invertidos en una nueva cadena mediante join('')
    let CadenaInvertida = ArrayInvertido.join('');

    // Retorno/LLamo la cadena invertida
    return CadenaInvertida;
}

// Defino una cadena de texto
let CadenaTexto = "¡Qué ganas de empezar!";

// LLamo a la función y guardo el resultado en una variable
let CadenaTextoInvertida = InvertirCadena(CadenaTexto);

// Muestro el resultado por consola
console.log(CadenaTextoInvertida); 