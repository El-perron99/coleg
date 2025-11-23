<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión
$con = mysqli_connect("localhost","root","","colegio");
if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Verificar que se haya enviado el formulario
if (!isset($_POST['id_atricula']) || empty($_POST['id_atricula'])) {
    die("Debes ingresar una matrícula para borrar. <a href='borrar_alumnos.html'>Regresar</a>");
}

$id = $_POST['id_atricula']; // nombre exacto de tu columna en la tabla

$sql = "DELETE FROM alumnos WHERE id_atricula = '$id'";

if (mysqli_query($con, $sql)) {
    echo "<center>Registro borrado correctamente.<br><br>";
    echo "<a href='borrar_alumnos.html'>Regresar</a></center>";
} else {
    die("Error al borrar: " . mysqli_error($con));
}
header("Location: gestionar_alumnos.php");
exit();
mysqli_close($con);
?>