<?php
session_start();
include_once "Flota.php";
//Primero comprobamos que tenemos datos para crear el objeto.
if (isset($_GET["marca"]) && isset($_GET["modelo"]) && isset($_GET["kms"]) && isset($_GET["color"])) {
    $cocheN = new Coche($_GET["marca"], $_GET["modelo"], $_GET["kms"], $_GET["color"]);
    if (!isset($_SESSION["unaFlota"])){
        $_SESSION["unaFlota"] = new Flota();
    }
    $_SESSION["unaFlota"]->agregarCoches($cocheN);
    $_SESSION["unaFlota"]->mostrarFlota();


}
