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
<h1>Clases y Objetos</h1>

<?php
require_once "Grupo.php";
$p1 = new persona();
$p1->setNombre("Jose");
$p1->setApellido("Perez");
$p1->setEdad("18");

/**/
$p2 = new persona();
$p2->setNombre("María");
$p2->setApellido("Gonzalez");
$p2->setEdad("18");

/**/
$p3 = new persona();
$p3->setNombre("Karen");
$p3->setApellido("Simons");
$p3->setEdad("20");

/**/
$club = new Grupo();
$club->agrgarPersona($p1);
$club->agrgarPersona($p2);
$club->agrgarPersona($p3);

/* Llamas el metodo de recorrer el Array y nos muestra los objetos insertados */
$club->mostrarGrupo();

?>
</body>
</html>


