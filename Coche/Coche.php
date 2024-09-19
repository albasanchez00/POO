<?php

class Coche
{
    private $marca;
    private $modelo;
    private $kms;
    private $color;

    /**
     * @param $marca
     * @param $modelo
     * @param $kms
     * @param $color
     */
    public function __construct($marca, $modelo, $kms, $color)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->kms = $kms;
        $this->color = $color;
        $this->mostrarCoches();
    }

    public function mostrarCoches()
    {
        echo "Marca: " . $this->marca ."<br>Modelo: " . $this->modelo ."<br>Kms: " . $this->kms ."<br>Color: " . $this->color;
    }





}


