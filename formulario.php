<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CCS/form.css">
    <title>Registro de Viajes</title>
</head>
<body>
    <header>
        <h1>Registro de Viajes</h1>
    </header>
    <main>

    <nav>
        <a href="index.php">Inicio</a>
        <a href="formulario.php">Registrar viaje</a>
        
    </nav>

        <section class="register-section">
            <div class="register-container">
                <h2>Registrar Nuevo Paquete Turístico</h2>
                <form action="procesar.php" method="POST">
                    <input type="text" name="hotel" placeholder="Nombre del Hotel" required> <br>
                    <input type="text" name="ciudad" placeholder="Ciudad" required> <br>
                    <input type="text" name="pais" placeholder="País" required> <br>
                    <input type="date" name="viaje" required> <br>
                    <input type="number" name="duracion" placeholder="Duración (días)" required> <br>
                    <button type="submit">Registrar</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Agencia de Viajes. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
