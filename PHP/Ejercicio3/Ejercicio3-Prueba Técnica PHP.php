<?php
//Primero de todo defino la clase Persona
class Persona{
    //Defino las propiedades/atributos de la clase Persona
    private string $nombre;
    private int $edad;
    private string $email;

    //Creo el constructor para inicializar los atributos de la clase Persona
    public function __construct(string $nombre, int $edad, string $email){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->email = $email;
    }

    //Mediante el método getter obtengo la información de los atributos de la clase Persona
    public function getNombre(): string{
        return $this->nombre;
    }

    public function getEdad(): int{
        return $this->edad;
    }

    public function getEmail(): string{
        return $this->email;
    }

    // Luego creo una función para mostrar la información de la clase Persona
    public function mostrarInfo(): string {
        return $this->nombre . ' tiene ' . $this->edad . ' años y su email es ' . $this->email . '.<br>';
    }

    //Creo un método para verificar la edad de la persona, es decir para ver si es mayor o no de edad
    public function esMayorDeEdad(): bool{
        return $this->edad >= 18;
    }
}

//Creo un objeto de la clase Persona
$persona = new Persona("Nico", 19, "nicoalvaali7@hotmail.com");

//Muestro la información de la persona
echo $persona->mostrarInfo();

// Y por último verifico si la persona es mayor de edad o no
if($persona->esMayorDeEdad()){
    echo '<br>'.'Es mayor de edad';
}else{  
    echo 'No es mayor de edad';
}
?>
