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
</head>

<body class="body2">

    <div class="header">
        <p class="footer__estatus">Estatus De la Conexión a servidor:<span style="color:red;">
                <?php echo $connection_status; ?></span></p>
    </div>

    <div class="container containerMenu">
        <div class="left">
            <div class="userInfo">
                <img src="../imgs/lalaIcon.png" class="lalaIcon">
                <img src="../imgs/userImg.png" alt="" class="userImg">

                <p class="userName"><?php echo htmlspecialchars($username); ?></p>
            </div>

        </div>
        <div class="right">
            <a href=""><img src="../imgs/Q3.png" alt="" class="options"></a>
            <a href=""><img src="../imgs/Q2.png" alt="" class="options"></a>
            <a href="registro.php"><img src="../imgs/Q1.png" alt="" class="options"></a>
            <a href=""><img src="../imgs/Q5.png" alt="" class="options"></a>
            <a href=""><img src="../imgs/Q4.png" alt="" class="options"></a>
        </div>

    </div>

    <footer class="footer">
        <p><?php echo date("l jS F Y"); ?> : <?php
        date_default_timezone_set("America/Mexico_City");
         echo date("h:i:sa "); ?></p>
        <p class="footer__server">Server name: <span style="color:red;"> <?php echo $server_name; ?></span></p>

        <p class="footer__ip">Ip servidor Gestión:<span style="color:red;"> <?php echo $local_ip; ?></span></p>
    </footer>
</body>

</html>