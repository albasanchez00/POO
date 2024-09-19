<?php
// El nombre de las clases por conversión deben de comenzar en mayúsculas
class persona
{
    // Modificador de acceso -> private - public - protected.
    //Públicos: se pouede acceder desde cualquier archivo del proyecto
    //Privado: solo se accede desde la propia clase.
    //Protected: clases vecinas - hijas (subclases).
    //Atributos de la clase Persona
    //El identetificador de los Atributos se rigen con las normas de las variables.
    private $nombre;
    private $apellido;
    private $edad;


    /*
    * La forma de acceder a esos Atributos privados e spor medio de los métodos getter a setter
       - Setter: Son los métodos que a través del paso de parámetros se le asigna un valor cuando instancia una clase.
     */
    public function setNombre($name){
        $this->nombre = $name; //Nombre es el atributo y $name es el valor que se pasa cuando llamas a la función.
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getEdad()
    {
        return $this->edad;
    }

    public function pasarMayuscula($texto)
    {
        return strtoupper($texto);
    }
    public function nombreCompleto(){
        return $this->nombre." ".$this->apellido;
    }

    public function mostrarDatos(){
        echo "Nombre: ".$this->pasarMayuscula($this->nombre)."</br>";
        echo "Apellido: ".$this->apellido."</br>";
        echo "Edad: ".$this->edad."</br>";
    }
}

    //Primero comprobamos que tenemos datos para crear el objeto.
    if (isset($_GET["nombre"])&&isset($_GET["apellido"])&&isset($_GET["edad"])){
        $personaF = new persona();
        $personaF->setNombre($_GET["nombre"]);
        $personaF->setApellido($_GET["apellido"]);
        $personaF->setEdad($_GET["edad"]);
        $personaF->mostrarDatos();
    }


    class OtrasPersonas
    {
        // Otra clase
    }




