<?php
session_start();
if (!isset($_SESSION['Admin']) && !isset($_SESSION['Standard']) ) {
    header('Location: login.php');
} ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <header>
        <?php include '../components/header.php' ?>
    </header>
    <main>
        <h1>Bienvenido</h1>
       
    </main>
    <footer>

    </footer>    
    <script src="../js/header.js"></script>
</body>
</html>