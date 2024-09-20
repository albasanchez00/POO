<?php

namespace Herencia2;

class Individuo
{
protected $nombre;
protected $apellido;
protected $domicilio;
protected $edad;

    /**
     * @param $nombre
     * @param $apellido
     * @param $domicilio
     * @param $edad
     */
    public function __construct($nombre, $apellido, $domicilio, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->domicilio = $domicilio;
        $this->edad = $edad;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido): void
    {
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * @param mixed $domicilio
     */
    public function setDomicilio($domicilio): void
    {
        $this->domicilio = $domicilio;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }


    public function mostrarInformacion(){
        return "Nombre: ".$this->nombre.
            "<br>Apellido: ".$this->apellido.
            "<br>Domicilio: ".$this->domicilio.
            "<br>Edad: ".$this->edad;
    }


}