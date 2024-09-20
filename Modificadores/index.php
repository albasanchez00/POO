<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>
<?php

use Modificadores\Productos;

include_once("Productos.php");
include_once("ProductoIVAvariable.php");
    echo "El IVA de todos los productos es ".\Modificadores\Productos::IVA."%";
    $miProducto = new \Modificadores\Productos("Lapiz",1.5);
    echo "<br>";
    echo $miProducto->mostrarProducto();
    echo "<br>";

    echo "-----------------------------------";

    $productoIvaR = new ProductoIVAvariable("Leche",1.33);
    ProductoIVAvariable::setIVA(4);
    echo "<br>";
    echo $productoIvaR->mostrarProducto();
    echo "<br>";

    // Otro objeto que deberia tener el iva = 21%
    $productoIvaR2 = new ProductoIVAvariable("Cerveza",1.4);
    echo "<br>";
    echo $productoIvaR2->mostrarProducto(). "<br> Tiene un iva de ".ProductoIVAvariable::$IVA."%";

    /* El uso de static puede utilizarse por ejemplo para crear el número y su incremento de objetos */
?>
</body>
</html>
