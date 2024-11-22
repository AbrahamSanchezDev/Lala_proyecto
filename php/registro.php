<?php

include "../informacion.php";
$printAll = false;
$doPrint = false;
$carta_porte_a_imprimir = [];
// HACER FUNCIONES DE CRUD CUANDO SE USAN LOS MODALS
include "registro_load.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/registro.css">

</head>

<body class="body2">

    <div class="header">
        <p class="footer__estatus">Estatus De la Conexión a servidor:<span style="color:red;">
                <?php echo $connection_status; ?></span></p>
    </div>

    <div class="containerRegistro">
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
        <div class="rightRegistro">
            <div class="top">
                <!-- Formulario -->
                <form action="agregar_carta_porte.php" method="post" class="form form-section" id = "cartaPorteForm">
                    <div class="form-row">
                        <label>Operador:</label><input type="text" name="operador" id="operador">
                        <label>Fecha de salida del transporte:</label><input type="date" name="fecha_de_salida"
                            id="fecha_de_salida">
                    </div>
                    <div class="form-row">
                        <label>Placa de Transporte:</label><input type="text" name="placa_de_transporte"
                            id="placa_de_transporte">
                        <label>Hora de salida del transporte:</label><input type="time"
                            name="hora_de_salida_de_transporte" id="hora_de_salida_de_transporte">
                    </div>
                    <div class="form-row">
                        <label>Modelo:</label><input type="text" name="modelo" id="modelo">
                        <label>Dirección de destino:</label><input type="text" name="direccion_de_destino"
                            id="direccion_de_destino">
                    </div>
                    <div class="form-row">
                        <label>Ciudad Origen:</label><input type="text" name="ciudad_origen" id="ciudad_origen">
                        <label>Número de contacto:</label><input type="text" name="numero_de_contacto"
                            id="numero_de_contacto">
                    </div>
                    <button type="submit" class="clickeable" id="botonAgregar" hidden>Agregar</button>
                </form>
                <!-- MENU LATERAL -->
                <div class="icons">
                    <img src="../imgs/W4.png" alt="eliminar" data-bs-toggle="modal" data-bs-target="#modalEliminar"
                        title="Eliminar" />
                    <img src="../imgs/W2.png" alt="crear" data-bs-toggle="modal" data-bs-target="#modalAgregar"
                        title="Crear" />
                    <img src="../imgs/W3.png" alt="editar" data-bs-toggle="modal" data-bs-target="#modalBuscarFolio"
                        title="Editar" />
                    <img id="iconoModificar" src="../imgs/W1.png" alt="modificar" title="Agregar" />
                </div>
            </div>


            <!-- Tabla -->
            <?php 
            include "tablas.php"; ?>

            <script>
            const imgAgregar = document.getElementById("iconoModificar");
            const botonAgregar = document.getElementById("botonAgregar");

            imgAgregar.addEventListener("click", function(e) {
                botonAgregar.click();
            });

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

        

            const printAll = <?php echo json_encode($printAll); ?>;
            const doPrint = <?php echo json_encode($doPrint); ?>;

            function updateDisplay(elemento) {
                const operador = elemento["operador"];
                const placa_de_transporte = elemento["placa_de_transporte"];
                const modelo = elemento["modelo"];
                const ciudad_origen = elemento["ciudad_origen"];
                const fecha_de_salida = elemento["fecha_de_salida"];
                const hora_de_salida_de_transporte = elemento["hora_de_salida_de_transporte"];
                const direccion_de_destino = elemento["direccion_de_destino"];
                const numero_de_contacto = elemento["numero_de_contacto"];

                if (elemento != undefined && elemento != "") {
                    console.log(operador);
                    console.log(placa_de_transporte);
                    console.log(modelo);
                    console.log(ciudad_origen);
                    console.log(fecha_de_salida);
                    console.log(hora_de_salida_de_transporte);
                    console.log(direccion_de_destino);
                    console.log(numero_de_contacto);
                }


                const operadorInput = document.getElementById("operador");
                const placa_de_transporteInput = document.getElementById("placa_de_transporte");
                const modeloInput = document.getElementById("modelo");
                const ciudad_origenInput = document.getElementById("ciudad_origen");
                const fecha_de_salidaInput = document.getElementById("fecha_de_salida");
                const hora_de_salida_de_transporteInput = document.getElementById("hora_de_salida_de_transporte");
                const direccion_de_destinoInput = document.getElementById("direccion_de_destino");
                const numero_de_contactoInput = document.getElementById("numero_de_contacto");


                operadorInput.value = operador == undefined ? "" : operador;
                placa_de_transporteInput.value = placa_de_transporte == undefined ? "" : placa_de_transporte;
                modeloInput.value = modelo == undefined ? "" : modelo;
                ciudad_origenInput.value = ciudad_origen == undefined ? "" : ciudad_origen;
                fecha_de_salidaInput.value = fecha_de_salida == undefined ? "" : fecha_de_salida;
                hora_de_salida_de_transporteInput.value = hora_de_salida_de_transporte == undefined ? "" :
                    hora_de_salida_de_transporte;
                direccion_de_destinoInput.value = direccion_de_destino == undefined ? "" : direccion_de_destino;
                numero_de_contactoInput.value = numero_de_contacto == undefined ? "" : numero_de_contacto;

                operadorInput.innerHTML =  operador == undefined ? "" : operador;
            }
            if (doPrint) {
                if (printAll) {
                    printTable();
                } else {
                    const elemento = <?php echo json_encode($carta_porte_a_imprimir); ?>;
                    updateDisplay(elemento);
                    printElement();

                }
                <?php 
                    $doPrint = false;
                    $printAll = false;
                ?>;
            }

            function printElement() {
                // Selecciona la tabla que deseas imprimir
                const tableElement = document.getElementById('cartaPorteForm');

                // Abre una nueva ventana de impresión
                const printWindowElement = window.open('', '', 'height=500,width=800');
                
                printWindowElement.document.write('<html><head><title>Imprimir Carta Porte</title>');
        
                printWindowElement.document.write('</head><body>');
                printWindowElement.document.write(tableElement.innerHTML);
                printWindowElement.document.write('</body></html>');

                // Cierra el documento y activa la ventana de impresión
                printWindowElement.document.close();
                printWindowElement.print();
            }
            </script>

        </div>
        <!-- Imprimir -->
        <!-- <div class="printer" onclick="printTable()"> -->
        <div class="printer" data-bs-toggle="modal" data-bs-target="#modalImprimir" title="Imprimir">

            <img src="../imgs/W8.png" alt="guardar" class="printerIcon" />
            <div class="printerText">
                <h3>IMPRIMIR </h3>
                <h3>CARTA PORTE</h3>
            </div>
        </div>
    </div>

    <?php  include "modales.php" ?>

    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>