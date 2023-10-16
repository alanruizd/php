<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Dashboard</title>
</head>
<body>
    <h2>Sesión abierta<h2>
        <p>
    <?php
    if(isset($_POST['nombre'])){
        $_SESSION['nombre'] = $_POST['nombre'];
        echo "Bienvenido,:<b> ".$_POST['nombre']."</b>";
    }else{
        if(isset($_SESSION['nombre'])){
            echo "Has iniciado Sesion como: ".$_SESSION['nombre'];
        }else{
            //Si la sesion expira
            echo "Acceso Restringido";
        }
    }
?></p>
<br>
<p><a href="login.php">Ir a la página inicial</a></p>
<body>
    </html>