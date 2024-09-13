<?php

class Coche
{
    private $marca;
    private $modelo;
    private $kms;
    private $color;

    public function mostrarDatos()
    {
        echo "Marca: " . $this->marca . " Modelo: " . $this->modelo . " Kms: " . $this->kms . " Color: " . $this->color;
    }

    public function __construct($marca, $modelo, $kms, $color)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->kms = $kms;
        $this->color = $color;
        $this->mostrarDatos();
    }
}

?>

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
<section>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div>
            <label for="marca"></label>
            <input type="text" name="marca" id="marca" placeholder="Marca">
        </div>
        <div>
            <label for="modelo"></label>
            <input type="text" name="modelo" id="modelo" placeholder="Modelo">
        </div>
        <div>
            <label for="kms"></label>
            <input type="text" name="kms" id="kms" placeholder="Kilometros">
        </div>
        <div>
            <label for="color"></label>
            <input type="text" name="color" id="color" placeholder="Color">
        </div>
        <div>
            <input type="submit" value="Enviar" id="enviar">
        </div>
    </form>
    <?php
        //Primero comprobamos que tenemos datos para crear el objeto.
        if (isset($_GET["marca"]) && isset($_GET["modelo"]) && isset($_GET["kms"]) && isset($_GET["color"])) {
            $cocheF = new Coche($_GET["marca"], $_GET["modelo"], $_GET["kms"], $_GET["color"]);
            $cocheF->mostrarDatos();
        }
    ?>
</section>
</body>
</html>
