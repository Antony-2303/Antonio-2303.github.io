<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "personal"; // <-- Aquí pones tu base de datos correcta

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario
$celular = $_POST['celular'];
$codofin = $_POST['codofin'];
$cip = $_POST['cip'];
$dni = $_POST['dni'];
$grado = $_POST['grado'];
$apellidos_nombre = $_POST['apellidos_nombre'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$situacion_policial = $_POST['situacion_policial'];
$situacion_especial = $_POST['situacion_especial'];
$cargo = $_POST['cargo'];
$dni_tipo = $_POST['dni_tipo'];
$correo = $_POST['correo'];

// Insertar datos en la tabla
$sql = "INSERT INTO personal_pnp 
(celular, codofin, cip, dni, grado, apellidos_nombre, fecha_nacimiento, situacion_policial, situacion_especial, cargo, dni_tipo, correo)
VALUES ('$celular', '$codofin', '$cip', '$dni', '$grado', '$apellidos_nombre', '$fecha_nacimiento', '$situacion_policial', '$situacion_especial', '$cargo', '$dni_tipo', '$correo')";

if ($conn->query($sql) === TRUE) {
    echo "¡Registro exitoso!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
