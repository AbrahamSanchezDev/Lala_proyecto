<?php 
// Verificar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    // Variables compartidas para todos los casos
    $id = mysqli_real_escape_string($conn, $_POST['folioBuscar'] ?? '');
    $operador = mysqli_real_escape_string($conn, $_POST['operador'] ?? '');
    $placa_de_transporte = mysqli_real_escape_string($conn, $_POST['placa_de_transporte'] ?? '');
    $modelo = mysqli_real_escape_string($conn, $_POST['modelo'] ?? '');
    $ciudad_origen = mysqli_real_escape_string($conn, $_POST['ciudad_origen'] ?? '');
    $fecha_de_salida = mysqli_real_escape_string($conn, $_POST['fecha_de_salida'] ?? '');
    $hora_de_salida_de_transporte = mysqli_real_escape_string($conn, $_POST['hora_de_salida_de_transporte'] ?? '');
    $direccion_de_destino = mysqli_real_escape_string($conn, $_POST['direccion_de_destino'] ?? '');
    $numero_de_contacto = intval($_POST['numero_de_contacto'] ?? 1);

    switch ($action) {
        case 'buscarFolio':
            echo "buscarFolio START -"; 
            echo $id;
            $stmt = $conn->prepare("SELECT * FROM carta_porte WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $prestamo = $result->fetch_assoc(); // Guardar datos del préstamo para prellenar el formulario de edición
            } else {
                echo $id;
                $error = "No se encontró el placa_de_transporte.";
            }
            $stmt->close();
            break;

        case 'editar':
            if ($id &&  $operador && $placa_de_transporte  && $modelo && $ciudad_origen && $fecha_de_salida && $hora_de_salida_de_transporte && $direccion_de_destino && $numero_de_contacto) {
                $stmt = $conn->prepare("UPDATE carta_porte SET operador = ?, placa_de_transporte = ?, modelo = ?, ciudad_origen = ?, fecha_de_salida = ?, hora_de_salida_de_transporte = ?, direccion_de_destino = ?, numero_de_contacto=? WHERE id = ?");
                $stmt->bind_param("sssssssi", $operador,$placa_de_transporte, $modelo, $ciudad_origen, $fecha_de_salida, $hora_de_salida_de_transporte, $direccion_de_destino,$numero_de_contacto);
                $stmt->execute();
                $stmt->close();
                header("Location: registro.php");
                exit();
            }
            break;
    }
}
?>