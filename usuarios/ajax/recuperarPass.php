<?php
require_once '../../phpEmail/RecoverPassword.php';
require_once '../../libs/conexion.php';
require_once '../../libs/funciones.php';
if (!empty($_REQUEST['pass'])) {
    $email = $_REQUEST['pass'];
    $idusuario = "SELECT Id_Usuario from usuarios where Email = ?";
    $idUser = prepare_select($conexion, $idusuario, [$email]);
    if ($idUser->num_rows > 0) {
        $idUser = $idUser->fetch_assoc();
        $idUser = $idUser['Id_Usuario'];
        // var_dump($idUser);
        $newPass = rand(11111111, 99999999);
        $sqlRecuperarPass = "UPDATE biblioteca.usuarios SET Clave = $newPass WHERE (Id_Usuario = ?);";
        prepare_query($conexion, $sqlRecuperarPass, [$idUser]);
        $send = enviarMail($email, 'Recupeacion de contraseña', 'Recuperando contsraeña ', $newPass);
        echo $send;
    } else {
    echo 2;
    }
}
