<?php
// Incluye la configuración de la conexión a la base de datos
include '../config.php';

// Verifica si se enviaron los datos a través del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtén los datos del formulario
    $operador = $_POST['operador'];
    $placa_de_transporte = $_POST['placa_de_transporte'];
    $modelo = $_POST['modelo'];
    $ciudad_origen = $_POST['ciudad_origen'];
    $fecha_de_salida = $_POST['fecha_de_salida'];
    $hora_de_salida_de_transporte = $_POST['hora_de_salida_de_transporte'];
    $direccion_de_destino = $_POST['direccion_de_destino'];
    $numero_de_contacto = $_POST['numero_de_contacto'];

    // Prepara la consulta SQL para insertar los datos
    $sql = "INSERT INTO carta_porte (operador, placa_de_transporte, modelo, ciudad_origen, fecha_de_salida, hora_de_salida_de_transporte, direccion_de_destino, numero_de_contacto) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepara la sentencia usando $conn en lugar de $connection
    $stmt = mysqli_prepare($conn, $sql);

    // Verifica si la preparación fue exitosa
    if ($stmt) {
        // Liga los parámetros a la consulta
        mysqli_stmt_bind_param($stmt, "sssssssi", $operador, $placa_de_transporte, $modelo, $ciudad_origen, $fecha_de_salida, $hora_de_salida_de_transporte, $direccion_de_destino, $numero_de_contacto);

        // Ejecuta la consulta
        if (mysqli_stmt_execute($stmt)) {
            echo "Préstamo agregado correctamente.";
            // Redirige a la página de visualización de registros
            header("Location: registro.php");
            exit();
        } else {
            echo "Error al agregar el préstamo: " . mysqli_error($conn);
        }

        // Cierra la sentencia
        mysqli_stmt_close($stmt);
    } else {
        echo "Error en la preparación de la consulta: " . mysqli_error($conn);
    }

    // Cierra la conexión
    mysqli_close($conn);
}
?>
