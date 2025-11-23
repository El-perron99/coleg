<?php
// Gestionar alumnos: hub de acciones
$accion = $_GET['accion'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Gestión de Alumnos</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <h1>Panel de Gestión de Alumnos</h1>
    <nav>
        <a href="gestionar_alumnos.php?accion=consultar">Consultar</a> |
        <a href="gestionar_alumnos.php?accion=insertar">Insertar</a> |
        <a href="gestionar_alumnos.php?accion=borrar">Borrar</a> |
        <a href="gestionar_alumnos.php?accion=actualizar">Actualizar</a>
    </nav>
    <hr>

    <?php
    // Incluir el archivo según la acción
    switch($accion) {
        case 'consultar':
            include('consulta_colegio.php');
            break;
        case 'insertar':
            include('inserta_alumnos.html');  // o el PHP si es formulario + inserción
            break;
        case 'borrar':
            include('borrar_alumnos.html');  // formulario para borrar
            break;
        case 'actualizar':
            include('actualizar_alumnos.php');  // formulario para seleccionar alumno
            break;
        default:
            echo "<p>Selecciona una acción arriba para comenzar.</p>";
    }
    ?>
</body>
</html>