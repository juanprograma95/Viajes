<?php
session_start();
include 'paqueteTour.php';

function showNotification($message) {
    echo "<script type='text/javascript'>alert('$message');</script>";
}

if (isset($_POST['añadir'])) {
    $nombreHotel = $_POST['hotel'];
    $ciudad = $_POST['ciudad'];
    $pais = $_POST['pais'];
    $fechaViaje = $_POST['fecha'];
    $duracion = $_POST['duracion'];

    $newPackage = new paqueteTour($nombreHotel, $pais, $ciudad, $fechaViaje, $duracion);

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = [];
    }

    $_SESSION['carrito'][] = $newPackage;
    showNotification("Paquete añadido al carrito.");
}

if (isset($_POST['remover'])) {
    $index = $_POST['index'];
    if (isset($_SESSION['carrito'][$index])) {
        array_splice($_SESSION['carrito'], $index, 1);
        showNotification("Paquete eliminado del carrito.");
    }
}

if (isset($_POST['clear_cart'])) {
    unset($_SESSION['carrito']);
    showNotification("Carrito limpiado.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CCS/style.css">
    <title>Carrito de Compras</title>
</head>
<body>
    <header>
        <h1>Agencia de Viajes</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="destinos.php">Destinos</a></li>
                <li><a href="ofertas.php">Ofertas</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="cart-container">
            <h3>Carrito de Compras:</h3>
            <?php if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])): ?>
                <ul>
                    <?php foreach ($_SESSION['carrito'] as $index => $package): ?>
                        <li>
                            <?php echo "Hotel: {$package->nombreHotel}, Ciudad: {$package->ciudad}, País: {$package->pais}, Fecha: {$package->fechaViaje}, Duración: {$package->duracion} días"; ?>
                            <form method="POST" action="carrito.php" style="display:inline;">
                                <input type="hidden" name="index" value="<?php echo $index; ?>">
                                <button type="submit" name="remover">Eliminar</button>
                            </form>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <form method="POST" action="carrito.php">
                    <button type="submit" name="clear_cart">Limpiar Carrito</button>
                </form>
            <?php else: ?>
                <p>El carrito está vacío.</p>
            <?php endif; ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Agencia de Viajes. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

