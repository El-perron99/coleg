<?php
$con = mysqli_connect("localhost","root","","colegio");
if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}


$ID = $_POST['id_atricula'];
$ESPECIALIDAD = $_POST['especialidad'];
$NOMBRE = $_POST['nombre'];
$APELLIDOS = $_POST['apellidos'];
$FECHADENACIMIENTO = $_POST['fechadenacimiento'];
$DIRECCION = $_POST['direccion'];
$TELEFONO = $_POST['telefono'];


$sql = "UPDATE alumnos SET 
    especialidad='$ESPECIALIDAD', 
    nombre='$NOMBRE', 
    apellidos='$APELLIDOS', 
    fechadenacimiento='$FECHADENACIMIENTO', 
    direccion='$DIRECCION', 
    telefono='$TELEFONO' 
    WHERE id_atricula='$ID'";

if (!mysqli_query($con, $sql)) {
    die("Error al actualizar: " . mysqli_error($con));
}
header("Location: gestionar_alumnos.php");
exit();
mysqli_close($con);

header("Location: actualizar_alumnos.php");
exit;
?>