<?php

$servidor = "localhost";
$usuario = "root";
$pass = "";
$database = "AGENCIA";

$conexion = new mysqli($servidor, $usuario, $pass, $database);

$sql = "SELECT h.nombre, h.ubicacion, COUNT(r.id_reserva) AS numero_reservas
        FROM HOTEL h
        JOIN RESERVA r ON h.id_hotel = r.id_hotel
        GROUP BY h.id_hotel
        HAVING COUNT(r.id_reserva) > 2";
        
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Nombre del Hotel</th><th>Ubicación</th><th>Número de Reservas</th></tr>";
    while($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["ubicacion"] . "</td>";
        echo "<td>" . $row["numero_reservas"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay hoteles con más de dos reservas";
}

// Cerrar la conexión
$conexion->close();

?>