//Función para contar las vocales que tiene una cadena de texto
function ContarVocales(cadena) {
    // Creo una variable para un contador que usaré para contar las vocales
    let contador = 0;

    // Convierto el texto a minúsculas para que no haya problemas con las vocales mayúsculas
    let TextoMinusculas = cadena.toLowerCase();
    
    // Defino las vocales que voy a contar
    let vocales = "aeiou";

    //Recorro cada carácter de la cadena de texto mediante un bucle for
    for (let i = 0; i < TextoMinusculas.length; i++) {
        //Verifico si el carácter actual es una vocal
        if (vocales.includes(TextoMinusculas[i])) {
            //Si es una vocal, incremento el contador
            contador++;
        }
    }

    //Retorno la cantidad de vocales encontradas en la cadena
    return contador;
} 

//Defino una cadena de texto de prueba
let cadena = "Hola me llamo Nicolás y soy estudiante de ASIR";

//LLamo a la función y guardo el resultado en una variable
let TotalVocales = ContarVocales(cadena);

//Muestro el resultado en consola
console.log("La cadena de texto tiene un total de " + TotalVocales + " vocales");