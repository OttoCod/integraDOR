<?php
// Configuración de la conexión a la base de datos
$servername = "localhost"; // o "127.0.0.1"
$username = "tu_usuario"; // Cambia a tu usuario de MySQL
$password = "tu_contraseña"; // Cambia a tu contraseña de MySQL
$dbname = "gym";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$mensaje = $_POST['message'];

// Insertar datos en la tabla contactos
$sql = "INSERT INTO contactos (nombre, email, telefono, mensaje) VALUES ('$nombre', '$email', '$telefono', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "¡Mensaje enviado con éxito!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
