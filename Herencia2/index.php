<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Información</title>
</head>
<body>
<?php

    use Herencia2\Alumno;

    require_once "Individuo.php";
    require_once "Alumno.php";

    $miAlumno=new Alumno("Juan","Martinez","c/ España, 7", 16,1);
    echo $miAlumno->mostrarAlumno();
    echo "<br>-------------------------------------<br>";
    echo $miAlumno->mostrarInformacion(); //Muestra solo los datos del metodo clase de individuo
    $miAlumno->aumentarEdad();
    $miAlumno->aumentarMatricula();
    echo "<br>-------------------------------------<br>";
    echo $miAlumno->mostrarAlumno();
?>
</body>
</html>
