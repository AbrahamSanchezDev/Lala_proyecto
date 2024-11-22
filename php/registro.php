<?php

    $printAll = false;
    $doPrint = false;
    $carta_porte_a_imprimir = [];
    
    include "../informacion.php";


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
                <form action="agregar_carta_porte.php" method="post" class="form form-section" id="cartaPorteForm">
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
    <?php include "imprimir_carta_porte.php";?>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>