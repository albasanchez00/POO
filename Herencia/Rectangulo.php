<?php

namespace Herencia;

use Herencia\Cuadrado;

class Rectangulo extends Cuadrado
{
    private $altura;

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    public function superficie()
    {
        return $this->base*$this->altura;
    }



}