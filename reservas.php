<?php
include 'database.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $servicio = $_POST['servicio'];

    $sql = "INSERT INTO reservaciones (nombre, correo, fecha, hora, servicio) 
            VALUES ('$nombre', '$correo', '$fecha', '$hora', '$servicio')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>¡Cita reservada con éxito! <a href='index.php'>Volver al inicio</a></p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }

    $conn->close();
}
?>
