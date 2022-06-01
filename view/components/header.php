<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../css/generalStyles.css">
    <link rel="stylesheet" href="../css/768p.css" media="screen and (min-width: 768px)">
    <link rel="stylesheet" href="../css/1300p.css" media="screen and (min-width: 1300px)">
</head>
    <img id="header_logo" src="../../assets/icons/logoV2.svg" alt="logo">  
    <p id="header_user" class="mobileComponent"><!--Se muestra el nombre del usuario logueado-->
        <?php if (isset($_SESSION['Admin'])) { ?>
            Usuario:
            <?php echo $_SESSION['Admin'];
        }elseif (isset($_SESSION['Standard'])) { ?>
            Usuario:
            <?php echo $_SESSION['Standard'];
         }?>
    </p>
    <nav>
        <img id="header_iconMenu" class="header_mobileComponent" src="../../assets/icons/icon_menu.svg" alt="icono de menu">
        <img id="header_closeIcon" class="header_mobileComponent" src="../../assets/icons/close_icon.svg" alt="icono de cerrar el menu">
        <ul id="mobileMenu">
            <li class="mobileMenu_item"><a href="./home.php">INICIO</a></li>
            <li class="mobileMenu_item"><a href="./registros.php">REGISTROS</a></li>
            <li class="mobileMenu_item"><a class="dropItem" href="#">USUARIOS</a>
                <ul id="mobileSubMenu">
                    <?php if (isset($_SESSION['Admin'])) { ?>
                    <li class="mobileSubMenu_item"><a href="list_users.php">Administrar usuarios</a></li>
                    <?php } ?>
                    <li class="mobileSubMenu_item"><a href="change_pass.php">Cambiar contraseña</a></li>
                    <li class="mobileSubMenu_item"><a id="cerrarSesionMobile" href="../../controlers/close_sesions_controler.php">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
        <ul id="dropDownMenu">
            <li class="dropDownMenu_item"><a href="./home.php">INICIO</a></li>
            <li class="dropDownMenu_item"><a href="./registros.php">REGISTROS</a></li>
            <li class="dropDownMenu_item">USUARIOS
                <ul id="dropDownSubMenu">
                    <?php if (isset($_SESSION['Admin'])) { ?>
                    <li class="dropDownSubMenu_item"><a href="list_users.php">Administrar usuarios</a></li>
                    <?php } ?>                
                    <li class="dropDownSubMenu_item"><a href="change_pass.php">Cambiar contraseña</a></li>
                    <li class="dropDownSubMenu_item"><a href="../../controlers/close_sesions_controler.php">Cerrar sesión</a></li>
                </ul> 
                </li>
            
        </ul>
    </nav> 
</html>