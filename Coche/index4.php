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
require_once "Flota.php";
$p1 = new coche();
$p1->setMarca("Jose");
$p1->setModelo("Perez");
$p1->setKms("18");
$p1->setColor("18");



/**/
$tipCoche = new Coches();
$tipCoche->agrgarCoches($p1);


/* Llamas el metodo de recorrer el Array y nos muestra los objetos insertados */
$tipCoche->mostrarFlota();
 
?>
</body>
</html>


