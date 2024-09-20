<?php


class ProductoIVAvariable
{
    public static $IVA=21;
    public static $id=0;
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
        self::$id++;
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

    public static function getIVA(): int
    {
        return self::$IVA;
    }

    public static function setIVA(int $IVA): void
    {
        self::$IVA = $IVA;
    }

    public function mostrarProducto(){
        return "Id → ".self::$id.
            "<br>Producto  → " . $this->nombreP .
            "<br>Precio Base → " . $this->precioP.
            "<br>Precio + IVA → " . $this->precioP*((self::$IVA/100)+1);
    }


}