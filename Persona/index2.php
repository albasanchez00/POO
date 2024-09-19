<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "Persona.php";
//Creamos un objeto llamado $persona1 de la clase Persona.
$persona1 = new persona();
if ($persona1 instanceof persona){ //Confirma que la clase a la que pertenece el objeto es la correcta
    $persona1->setNombre("pepito");
    echo "El nombre en el condicional es ".$persona1->getNombre()."</br>";
    echo $persona1->getNombre()." es de la clase ".get_class($persona1)."</br>";
}


$persona2 = new persona();
$persona2->setNombre("Isabel");
$persona2->setApellido("García");
$persona2->setEdad("24");
echo "La persona 2 es: ".$persona2->getNombre()." ".$persona2->getApellido()." y tiene ".$persona2->getEdad()." años."."<br>";
echo "La persona 2 es ".$persona2->nombreCompleto();
?>

<section>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>">
        <div>
            <label for="nombre"></label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        </div>
        <div>
            <label for="apellido"></label>
            <input type="text" name="apellido" id="apellido" placeholder="Apellido">
        </div>
        <div>
            <label for="edad"></label>
            <input type="text" name="edad" id="edad" placeholder="Edad">
        </div>
        <div>
            <input type="submit" value="Enviar" id="enviar">
        </div>
    </form>
</section>

</body>
</html>
<?php
