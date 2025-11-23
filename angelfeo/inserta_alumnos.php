<?php
$con = mysqli_connect("localhost", "root", "", "colegio");

if(!$con){
    die('No se estableció la conexión con el servidor: ' . mysqli_connect_error());
}

// Verificar que el formulario fue enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Evitar errores si alguna clave falta
    $id_atricula = $_POST['id_atricula'] ?? '';
    $especialidad = $_POST['especialidad'] ?? '';
    $nombre = $_POST['nombre'] ?? '';
    $apellidos = $_POST['apellidos'] ?? '';
    $fechadenacimiento = $_POST['fechadenacimiento'] ?? '';
    $direccion = $_POST['direccion'] ?? '';
    $telefono = $_POST['telefono'] ?? '';

    $sql = "INSERT INTO alumnos (id_atricula, especialidad, nombre, apellidos, fechadenacimiento, direccion, telefono)
            VALUES ('$id_atricula','$especialidad','$nombre','$apellidos','$fechadenacimiento','$direccion','$telefono')";

    if (!mysqli_query($con, $sql)) {
        die("Error al insertar: " . mysqli_error($con));
    }

    echo "<center>";
    echo "1 registro agregado<br>";
    echo "<a href='consulta_colegio.php'>Ver registros</a>";
} else {
    echo "Acceso inválido. Debes enviar el formulario.";
}
header("Location: gestionar_alumnos.php");
exit();
mysqli_close($con);
?>