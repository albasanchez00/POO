<?php
require_once "Persona.php";
/* La finalidad de esta clase es crear varias personas y agruparlas en un Array */
class Grupo
{
    public $personas=[]; //$persona será un Array de Objetos de tipo Persona

    // Agregar una Persona en el Array
    public function agrgarPersona(Persona $persona)
    {
        $this->personas[]=$persona;
    }
    // Recorrer y mostrar el Grupo
    public function mostrarGrupo()
    {
        foreach ($this->personas as $individuo) {
            echo "Nombre: ".$individuo->getNombre()."<br/>";
            echo "Apellido: ".$individuo->getApellido()."<br/>";
            echo "Edad: ".$individuo->getEdad()."<br/>";


        }
    }
}