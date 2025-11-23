<meta charset="8">
<html>
<head>
<title>Consulta Alumnos</title>
<link rel="stylesheet" type="text/css" href="CSS.css">
<meta charset="utf-8"/>
<style type="text/css"></style>
</head>
<body>
<center>
<?php
$con=mysqli_connect("localhost","root","","colegio");
$resultado=mysqli_query($con,"select * from alumnos");
if($resultado===FALSE){
    echo"fallo";
    die(mysqli_error($con));
}
echo"<center><font face='Arial'>";
echo"<a href='consulta_colegio.php'>Actualizar tabla</a>";
echo "<h1>Consulta de la tabla alumnos</h1>";
echo "<table border='1'>
<tr>
<th>Matricula</th>
<th>especialidad</th>
<th>nombre</th>
<th>Apellidos</th>
<th>fehcadenacimiento</th>
<th>direccion</th>
<th>telefono</th>
</tr>";

while($row = mysqli_fetch_assoc($resultado)){
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
$registros=mysqli_num_rows($resultado);
echo "<br>registros: ".$registros;

mysqli_close($con);
?>
</center>
</body>
</html>