<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/tablas.css">
</head>
<body>
    <div class="table-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Operador</th>
                    <th>Placa de Transporte</th>
                    <th>Modelo</th>
                    <th>Ciudad Origen</th>
                    <th>Fecha de Salida</th>
                    <th>Hora de salida de transporte</th>
                    <th>Dirección de destino</th>
                    <th>Numero de contacto</th>
                </tr>
            </thead>
            <tbody>
                <?php
          if ($conn) {
              $result = mysqli_query($conn, "SELECT * FROM carta_porte");
              if ($result && mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['operador']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['placa_de_transporte']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['modelo']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['ciudad_origen']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['fecha_de_salida']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['hora_de_salida_de_transporte']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['direccion_de_destino']) . "</td>";
                      echo "<td>" . htmlspecialchars($row['numero_de_contacto']) . "</td>";
                      echo "</tr>";
                  }
              } else {
                  echo "<tr><td colspan='8'>No hay registros disponibles.</td></tr>";
              }
          } else {
              echo "<tr><td colspan='8'>Conexión cerrada o inválida</td></tr>";
          }
          ?>
            </tbody>
        </table>
</body>

</html>