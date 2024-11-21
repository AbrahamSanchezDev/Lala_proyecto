<?php

include "informacion.php";
?>

<html>

<head>
    <title>LALA</title>

    <link rel="stylesheet" href="./css/index.css">
</head>

<body class = "indexBody">
    <div class="container containerIndex">
        <div class="left-section">
            <form action="login.php" method="POST">
                <input placeholder="Usuario" type="text" name="username" required name="usuario" />
                <input placeholder="Contraseña" type="password" name="password" required name="password" />
                <input type="submit" value="Ingresar" />
            </form>
        </div>
        <div class="right-section">
            <div class="overlay">
                <h2>Sistema de Gestión para el Control de Transporte y Logística</h2>
            </div>
        </div>
    </div>


    <footer class="footer">
        <p><?php echo date("l jS F Y"); ?> : <?php
        date_default_timezone_set("America/Mexico_City");
         echo date("h:i:sa "); ?></p>
        <p class="footer__server">Nombre de la Estación de Trabajo: <span style="color:red;">
                <?php echo $server_name; ?></span></p>
        
    </footer>


</body>

</html>