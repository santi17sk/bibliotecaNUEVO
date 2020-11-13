<?php
session_start();
require_once '../../libs/conexion.php';
require_once '../../libs/funciones.php';
if (!empty($_REQUEST['pass'])) {
    $idUser = $_SESSION['User']['Id_Usuario'];
    $newPass = $_REQUEST['pass'];
    $sql = "UPDATE biblioteca.usuarios SET Clave = ? WHERE (Id_Usuario = ?)";
    $upNewPass = prepare_query($conexion, $sql, [$newPass, $idUser]);
if ($upNewPass->error) {
    echo 0;
} else {
    echo 1; 
}

}
