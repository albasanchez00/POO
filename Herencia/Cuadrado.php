<?php

namespace Herencia;

class Cuadrado
{
    //CAlcular la superficie cuadrado -> base * base
    protected $base;

    /**
     * @return mixed
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param mixed $base
     */
    public function setBase($base): void
    {
        $this->base = $base;
    }


    /* Metodo que calcula la superficie */

    public function superficie()
    {
        return $this->base*$this->base;
    }
}