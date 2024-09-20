<?php

namespace Modificadores;

class Productos
{
    const IVA=21;
    private $nombreP;
    private $precioP;

    /**
     * @param $nombreP
     * @param $precioP
     */
    public function __construct($nombreP, $precioP)
    {
        $this->nombreP = $nombreP;
        $this->precioP = $precioP;
    }

    /**
     * @return mixed
     */
    public function getNombreP()
    {
        return $this->nombreP;
    }

    /**
     * @param mixed $nombreP
     */
    public function setNombreP($nombreP): void
    {
        $this->nombreP = $nombreP;
    }

    /**
     * @return mixed
     */
    public function getPrecioP()
    {
        return $this->precioP;
    }

    /**
     * @param mixed $precioP
     */
    public function setPrecioP($precioP): void
    {
        $this->precioP = $precioP;
    }

    public function mostrarProducto(){
        return "Producto → " . $this->nombreP .
            "<br>Precio Base → " . $this->precioP.
            "<br>Precio + IVA → " . $this->precioP*((self::IVA/100)+1);
    }


}