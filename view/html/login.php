<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/generalStyles.css">
</head>
<body>
    <main>
        <h1>LOGIN</h1>
        <form id="login_form" action="../../controlers/login_controler.php" method="post">
            <img id="logoLogin" src="../../assets/icons/logoV2_black-letters.svg" alt="logo">
            <label for="cedula">Cédula</label>
            <input type="number" autofocus required name="cedula">
            <label for="pass">Contraseña</label>
            <input type="pass" required name="pass">
            <input type="submit" value="Ingresar">
        </form>
    </main>
    <footer>

    </footer>
    <!-- <script src="../js/header.js"></script> -->
</body>
</html>