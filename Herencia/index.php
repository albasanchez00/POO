<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Herencias</title>
</head>
<body>
    <?php
    // Otra opcion es -> use
    require_once "Cuadrado.php";
    require_once "Rectangulo.php";

    $miCuadrado=new \Herencia\Cuadrado();
    $miCuadrado->setBase(45);

    echo "La superficie de mi Cuadrado es: ".$miCuadrado->superficie()."<br>";


    $miRectangulo=new \Herencia\Rectangulo();
    $miRectangulo->setBase(22);
    $miRectangulo->setAltura(6);

    /* Polimorfismo */
    echo "La superficie de mi Rectángulo es: ".$miRectangulo->superficie()."<br>";
    ?>

</body>
</html>
