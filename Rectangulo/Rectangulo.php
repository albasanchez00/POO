<?php
class Rectangulo
{
private $base;
    private $altura;

    /*
     * Creamos o generamos el metodo constructor.
     * Metodo Constructor: asignarle valor de inicio a los atributos.
    */
    /**
     * @param $base
     * @param $altura
     */
    public function __construct($b=1, $a=1)
    {
        $this->base = $b;
        $this->altura = $a;
    }

    public function getBase(): mixed
    {
        return $this->base;
    }

    public function setBase(mixed $base): void
    {
        $this->base = $base;
    }

    public function getAltura(): mixed
    {
        return $this->altura;
    }

    public function setAltura(mixed $altura): void
    {
        $this->altura = $altura;
    }

    public function getSuperficie(){
        return $this->base * $this->altura;
    }

}