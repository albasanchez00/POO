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
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    //Creamos un objeto llamado $persona1 de la clase Persona.
    $persona1 = new persona();
    $persona1->setNombre("Sergio");
    $persona1->setApellido("Díaz");
    $persona1->setEdad("18");
    echo "La persona 1 es: ".$persona1->getNombre()." ".$persona1->getApellido()." y tiene ".$persona1->getEdad()." años."."<br>";

    $persona2 = new persona();
    $persona2->setNombre("Isabel");
    $persona2->setApellido("García");
    $persona2->setEdad("24");
    echo "La persona 2 es: ".$persona2->getNombre()." ".$persona2->getApellido()." y tiene ".$persona2->getEdad()." años."."<br>";
    echo "La persona 2 es ".$persona2->nombreCompleto();
?>

<section>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div>
            <label for="nombre"></label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        </div>
        <div>
            <label for="apellido"></label>
            <input type="text" name="apellido" id="apellido" placeholder="Apellido">
        </div>
        <div>
            <label for="edad"></label>
            <input type="text" name="edad" id="edad" placeholder="Edad">
        </div>
        <div>
            <input type="submit" value="Enviar" id="enviar">
        </div>
    </form>
</section>

</body>
</html>
