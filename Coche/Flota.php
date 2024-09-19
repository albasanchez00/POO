<?php

class Flota
{
    private $coches = [];

    public function agregarCoches($coche)
    {
        // Aquí agregamos el coche al array existente de coches
        $this->coches[] = $coche;
    }

    public function mostrarFlota()
    {
        foreach ($this->coches as $coche) {
            $coche->mostrarCoches();
            echo "<br><br>"; // Para separar visualmente los coches en la salida
        }
    }
}
