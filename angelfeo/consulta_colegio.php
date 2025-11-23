<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Consulta Alumnos</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
<center>

<?php
// Conexión
$con = mysqli_connect("localhost", "root", "", "colegio");

if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}

$resultado = mysqli_query($con, "SELECT * FROM alumnos");

if ($resultado === FALSE) {
    echo "Error en la consulta.";
    die(mysqli_error($con));
}

echo "<center><font face='Arial'>";
echo "<a href='consulta_colegio.php'>Actualizar tabla</a>";
echo "<h1>Consulta de la tabla alumnos</h1>";

echo "<table border='1'>
<tr>
<th>Matrícula</th>
<th>Especialidad</th>
<th>Nombre</th>
<th>Apellidos</th>
<th>Fecha de nacimiento</th>
<th>Dirección</th>
<th>Teléfono</th>
</tr>";

// Mostrar registros
while ($row = mysqli_fetch_assoc($resultado)) {
    echo "<tr>";
    echo "<td align='center'>" . $row['id_atricula'] . "</td>";
    echo "<td>" . $row['especialidad'] . "</td>";
    echo "<td>" . $row['nombre'] . "</td>";
    echo "<td>" . $row['apellidos'] . "</td>";
    echo "<td>" . $row['fechadenacimiento'] . "</td>";
    echo "<td>" . $row['direccion'] . "</td>";
    echo "<td align='center'>" . $row['telefono'] . "</td>";
    echo "</tr>";
}

echo "</table>";

$registros = mysqli_num_rows($resultado);
echo "<br>Registros encontrados: " . $registros;

mysqli_close($con);
?>

</center>
</body>
</html>
