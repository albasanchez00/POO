<?php

namespace Herencia2;

use Herencia2\Individuo;

class Alumno extends Individuo
{
    private $matricula;

    public function __construct($nombre,$apellido,$domicilio,$edad,$matricula)
    {
        parent::__construct($nombre,$apellido,$domicilio,$edad); //hace referencia al constructor de clase principal
        $this->matricula = $matricula;
    }

    public function getMatricula($matricula){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function mostrarAlumno(){
        return parent::mostrarInformacion()."<br>Matriculado: ".$this->matricula;
    }

    public function aumentarMatricula(){
        $this->setMatricula($this->matricula+1);

    }

    public function aumentarEdad(){
        parent::setEdad($this->edad+1);
    }
}