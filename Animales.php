<?php

class Animales
{
    private $nombre;
    private $peso;
    private $edad;
    private $raza;


//Método Constructor -> Permite crear un objeto pasandole sus valores

    /**
     * @param $nombre
     * @param $peso
     * @param $edad
     * @param $raza
     */
    public function __construct($nombre, $peso, $edad, $raza)
    {
        $this->nombre = $nombre;
        $this->peso = $peso;
        $this->edad = $edad;
        $this->raza = $raza;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     * @param mixed $raza
     */
    public function setRaza($raza)
    {
        $this->raza = $raza;
    }

    public function mostrarDatos()
    {
        return "Nombre: " . $this->nombre . " Edad: " . $this->edad . " Raza: " . $this->raza . " y pesa " . $this->peso . " kilos";
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @return mixed
     */
    public function getRaza()
    {
        return $this->raza;
    }
}

$miPerro = new Animales("Misifú",4,8,"Agora Turco");
echo $miPerro->mostrarDatos(); //Tomamos lo que retorna el metodo mostrarDatos
echo $miPerro->getEdad(); //toma solo un dato
//Como sé la clase que esta itilizando en el objeto -> getClass()
echo "<br>La clase que uso para". $miPerro->getNombre()." es " . get_class($miPerro);
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario Coche</title>
</head>
<body>
</body>
</html>
