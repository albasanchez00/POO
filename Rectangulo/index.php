<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calcular Superficie</title>
</head>
<body>
    <h1>Superficie Rectángulo</h1>
    <?php
        include_once "Rectangulo.php";
        $rec1=new Rectangulo();
        echo "El rectangulo Nº1 tiene una base = ".$rec1->getBase()." y una altura = ".$rec1->getAltura()." ,y la superficies es = ".$rec1->getSuperficie()."<br>";
        $rec1->setBase(5);
        $rec1->setBase(5);
        echo "El rectangulo Nº1 tiene una base = ".$rec1->getBase()." y una altura = ".$rec1->getAltura()." ,y la superficies es = ".$rec1->getSuperficie()."<br>";

        $rec2=new Rectangulo(15,3);
        echo "El rectangulo Nº2 tiene una base = ".$rec2->getBase()." y una altura = ".$rec2->getAltura()." ,y la superficies es = ".$rec2->getSuperficie()."<br>";

        // Se le puede indicar cuando se crea el objeto el nombre del atributo que esta pasando referenciado por la variable... en este ejemplo se le pasa a: que gace referencia al atributo altura.
        $rec3=new Rectangulo(a:15);
        echo "El rectangulo Nº3 tiene una base = ".$rec3->getBase()." y una altura = ".$rec3->getAltura()." ,y la superficies es = ".$rec3->getSuperficie()."<br>";

        /* Si no se le pasa todos los parametros, php reconoce el valor, segun el orden en que lo espra el metodo constructor */
        $rec4=new Rectangulo(3);
        echo "El rectangulo Nº4 tiene una base = ".$rec4->getBase()." y una altura = ".$rec4->getAltura()." ,y la superficies es = ".$rec4->getSuperficie()."<br>";
    ?>
</body>
</html>
