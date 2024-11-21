<?php

include "../informacion.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/registro.css">
</head>

<body class="body2">

    <div class="header">
        <p class="footer__estatus">Estatus De la Conexión a servidor:<span style="color:red;">
                <?php echo $connection_status; ?></span></p>
    </div>

    <div class="container">
        <div class="left">
            <a href="menu.php" class="option0"><img src="../imgs/Q1.png" alt="" srcset="" class="option1"
                    id="backMenu"></a>
            <div class="userInfo">
                <img src="../imgs/lalaIcon.png" class="lalaIcon">
                <img src="../imgs/userImg.png" alt="" class="userImg">

                <p class="userName"><?php echo htmlspecialchars($username); ?></p>
            </div>
            <div class="footer">
                <p><?php echo date("l jS F Y"); ?> : <?php
        date_default_timezone_set("America/Mexico_City");
         echo date("h:i:sa "); ?></p>

            </div>
        </div>
        <div class="right">
            <!-- Formulario -->
            <div class="form-section">
                <div class="form-row">
                    <label>Operador:</label><input type="text">
                    <label>Fecha de salida del transporte:</label><input type="date">
                </div>
                <div class="form-row">
                    <label>Placa de Transporte:</label><input type="text">
                    <label>Hora de salida del transporte:</label><input type="time">
                </div>
                <div class="form-row">
                    <label>Modelo:</label><input type="text">
                    <label>Dirección de destino:</label><input type="text">
                </div>
                <div class="form-row">
                    <label>Ciudad Origen:</label><input type="text">
                    <label>Número de contacto:</label><input type="text">
                </div>
            </div>

            <!-- Tabla -->
            <?php 
            include "tablas.php"; ?>

            <script>
            function printTable() {
                // Selecciona la tabla que deseas imprimir
                const table = document.querySelector('.table-container').innerHTML;

                // Abre una nueva ventana de impresión
                const printWindow = window.open('', '', 'height=500,width=800');
                printWindow.document.write('<html><head><title>Imprimir Tabla</title>');
                printWindow.document.write('<style>');
                printWindow.document.write('table { width: 100%; border-collapse: collapse; }');
                printWindow.document.write('th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }');
                printWindow.document.write('th { background-color: #f2f2f2; }');
                printWindow.document.write('</style></head><body>');
                printWindow.document.write(table);
                printWindow.document.write('</body></html>');

                // Cierra el documento y activa la ventana de impresión
                printWindow.document.close();
                printWindow.print();
            }
            </script>
        </div>

    </div>


</body>

</html>