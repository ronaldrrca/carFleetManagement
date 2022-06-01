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
        <h1>EDITAR USUARIO</h1>
        <form id="editUser_form" action="../../controlers/editUser_controler.php" method="post">
            <label for="Id">Id</label>
            <input type="text" name="id" value="<?php echo $_GET['id'] ?>">
            <label for="cedula">Cédula</label>
            <input type="number" required name="cedula" value="<?php echo $_GET['cedula'] ?>">
            <label for="name">Nombre</label>
            <input type="text" required autofocus  name="nombre" value="<?php echo $_GET['nombre'] ?>">
            <label for="perfil">Perfil</label>
            <select name="perfil">
                <option value="<?php echo $_GET['perfil'] ?>" selected><?php echo $_GET['perfil'] ?></option>
                <option value="<?php if ($_GET['perfil'] == "Admin") {//Aqu´, dependiendo del pefil del usuario, mostramos la otras opciones para editar
                        echo "Standard";
                    } else if($_GET['perfil'] == "Standard"){
                        echo "Admin";
                    }
                    ?>"><?php if ($_GET['perfil'] == "Admin") {
                        echo "Standard";
                    } else if($_GET['perfil'] == "Standard"){
                        echo "Admin";
                    }
                    ?>
                </option>
            </select>
            <div id="editUser_buttons">
                <input type="submit" value="Actualizar">
            </div>
        </form>
        <a id="cancel" href="<?=$_SERVER['HTTP_REFERER']?>">Cancelar</a>
    </main>
    <footer>

    </footer>
    <script src="../js/header.js"></script>
</body>
</html>