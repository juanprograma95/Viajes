<?php
session_start();
include 'paqueteTour.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CCS/style.css">
    <title>Agencia de Viajes</title>
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
                <li><a href="carrito.php">Carrito</a></li>
                <li><a href="formulario.php">Registrar Viaje</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="register-section">
            <div class="register-container">
                <h2>Registrar Intención de Viaje</h2>
                <form method="POST" action="carrito.php">
                    <input type="text" name="hotel" placeholder="Nombre del Hotel" required>
                    <input type="text" name="ciudad" placeholder="Ciudad" required>
                    <input type="text" name="pais" placeholder="País" required>
                    <input type="date" name="fecha" required>
                    <input type="number" name="duracion" placeholder="Duración (días)" required>
                    <button type="submit" name="añadir">Añadir al Carrito</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Agencia de Viajes. Todos los derechos reservados.</p>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>
