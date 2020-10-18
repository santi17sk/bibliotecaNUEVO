<?php
session_start();
require_once 'conexion.php';
require_once 'funciones.php';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@400;700&family=Hind+Madurai:wght@400;700&display=swap" rel="stylesheet">
    <title>Tú Biblioteca</title>
    <link rel="stylesheet" href="/biblioteca2/assets/css/normalize.css">
    <link rel="stylesheet" href="/biblioteca2/assets/css/pushbar.css">
    <link rel="stylesheet" href="/biblioteca2/assets/css/style.css">
    <script src="https://kit.fontawesome.com/93249d5a1c.js" crossorigin="anonymous"></script>

</head>

<body>
    <header class="style__site">
        <div class="contenedor">
            <div class="barra">
                <div class="titulo">
                    <a href="../">
                        <h1>Tu<span class="fw__900">Biblioteca</span></h1>
                    </a>
                </div>
                <div class="items">
                    <?php if(isset($_SESSION['User'])): ?>
                        <a href="#"><i class="fas fa-user"></i> <?=$_SESSION['User']['Nick']?></a>
                        <a href="/biblioteca2/usuarios/update.php"><i class="fas fa-user-edit"></i> Editar Perfil</a>
                        <a href="/biblioteca2/acceso/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
                    <?php else: ?>
                        <a href="/biblioteca2/acceso/login.php"><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</a>
                        <a href="/biblioteca2/acceso/register.php"><i class="fas fa-user-plus"></i> Registrarse</a>
                    <?php endif; ?> 
                </div>
            </div>
            <div class="links__secundarios">
                <a href="/biblioteca2/index.php"><i class="fas fa-home"></i> Inicio</a>
                <a href="/biblioteca2/"><i class="fas fa-chevron-circle-down"></i> Categorías</a>
                <a href="/biblioteca2/section/contacto.php"><i class="fab fa-weixin"></i> Contacto</a>
                <a href="/biblioteca2/section/masSobreNos.php"><i class="fas fa-info-circle"></i> Sobre Nosotros</a>
            </div>
        </div>
    </header>
    <?php if(isset($_SESSION['User']) && $_SESSION['User']['Rol']=='admin') : ?>
        <div class="sidebar" data-pushbar-target="bar__menu" id="openMenu">
            <i class="fas fa-ellipsis-v"></i>
        </div>
    <?php endif; ?>