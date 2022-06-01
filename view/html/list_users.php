<?php
session_start();
if (!isset($_SESSION['Admin']) && !isset($_SESSION['Standard']) ) {
    header('Location: login.php');
} 
require '../../controlers/list_users_controler.php'
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Usuarios</title>
</head>
<body>
    <header>
        <?php include '../components/header.php' ?>
    </header>
    <main>
        <h1>Usuarios</h1>
        <table id="userTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th class="noMobileComponent">Cédula</th>
                    <th>Nombre</th>
                    <th>Perfil</th>
                    <th class="noMobileComponent">Editar</th>
                    <th class="noMobileComponent">Reset</th>
                    <th class="noMobileComponent">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($resultado = $listar->fetch_object()) { ?>
                    <tr>
                        <td><?php echo $resultado->usuarios_id ?></td>
                        <td class="noMobileComponent"><?php echo $resultado->usuarios_cedula ?></td>
                        <td><?php echo $resultado->usuarios_nombre ?></td>
                        <td><?php echo $resultado->usuarios_perfil ?></td>
                        <td class="noMobileComponent"><img class="editImage" src="../../assets/icons/edit_icon.svg" alt="icono editar usuario" onclick="editarUsuario('edit_user.php', '<?php echo $resultado->usuarios_id ?>' , 
                        '<?php echo $resultado->usuarios_cedula ?>' , '<?php echo $resultado->usuarios_nombre ?>', '<?php echo $resultado->usuarios_perfil ?>')"></td>
                        <td class="noMobileComponent"><img class="resetImage" src="../../assets/icons/reset_icon.svg" alt="icono resetar password" onclick="resetPass('../../controlers/resetPass_controler.php', 
                        '<?php echo  $resultado->usuarios_id ?>', '<?php echo $resultado->usuarios_cedula ?>', '<?php echo $resultado->usuarios_nombre ?>')" ></td>
                        <td class="noMobileComponent"><img class="deleteImage" src="../../assets/icons/delete_icon.svg" alt="icono eliminar usuario" onclick="eliminarUsuario('../../controlers/deleteUser_controler.php', 
                        '<?php echo $resultado->usuarios_id ?>', '<?php echo $resultado->usuarios_nombre ?>')"></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <a href="nuevoUsuario.php"><button id="nuevoUsuario_button"><img id="icon_addUser" src="../../assets/icons/add_icon.svg" alt="icono de agregar"> Crear usuario</button></a>
    </main>
    <footer>

    </footer>    
    <script src="../js/header.js"></script>
    <script src="../js/users.js"></script>
</body>
</html>