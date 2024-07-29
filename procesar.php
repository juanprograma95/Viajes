<?php
include 'paqueteTour.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreHotel = $_POST['nombreHotel'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $fechaviaje = $_POST['fechaViaje'];
    $duracion = $_POST['duracion'];

    // Aquí guardarías el nuevo paquete en la base de datos
    // Simulación de guardado en base de datos
    $nuevoPaquete = new paqueteTour($nombreHotel, $ciudad, $pais, $fechaviaje, $duracion);

    header("Location: success.html");
    exit();


}

?>

