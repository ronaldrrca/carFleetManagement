<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio contraseña</title>
</head>
<body>
    <header>
        <?php include '../components/header.php' ?>
    </header>
    <main>
        <h1>CAMBIO DE CONTRASEÑA</h1>
        <form id="login_form" action="../../controlers/changePass_controler.php" method="post">
            <img id="logoLogin" src="../../assets/icons/logoV2_black-letters.svg" alt="logo">
            <label for="cedula">Cédula</label>
            <input type="number" autofocus required name="cedula">
            <label for="contrasenaActual">Contraseña actual</label>
            <input type="pass" required name="contrasenaActual">
            <label for="contrasenaNueva">Contraseña nueva</label>
            <input type="pass" required name="contrasenaNueva">
            <label for="confirmacionContrasena">Repita la nueva contraseña</label>
            <input type="pass" required name="confirmacionContrasena">
            <input type="submit" value="Cambiar contraseña">
        </form>
        <a id="cancel" href="<?=$_SERVER['HTTP_REFERER']?>">Cancelar</a>
    </main>
    <footer>

    </footer>
    <!-- <script src="../js/header.js"></script> -->
</body>
</html>