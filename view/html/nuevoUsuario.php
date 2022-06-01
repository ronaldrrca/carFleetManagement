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
    <title>Nuevo usuario</title>
</head>
<body>
    <header>
        <?php include '../components/header.php' ?>
    </header>
    <main>
        <h1>CREAR USUARIO</h1>
        <form id="login_form" action="../../controlers/createUser_controler.php" method="post">
            <label for="cedula">Cédula</label>
            <input type="number" autofocus required name="cedula">
            <label for="name">Nombre</label>
            <input type="text" required name="name">
            <label for="perfil">Perfil</label>
            <select name="perfil" required>
                <option value="" disabled selected>Elija una opción</option>
                <option value="Admin">Admin</option>
                <option value="Standard">Standard</option>
            </select>
            <input type="submit" value="Crear">
        </form>
        <a id="cancel" href="<?=$_SERVER['HTTP_REFERER']?>">Cancelar</a>
    </main>
    <footer>

    </footer>
    <script src="../js/header.js"></script>
</body>
</html>