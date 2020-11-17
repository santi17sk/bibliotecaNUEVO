<?php
session_start();
require_once '../../libs/conexion.php';
require_once '../../libs/funciones.php';
require_once '../../phpEmail/RecoverPassword.php';
$date = date("Y-m-d");
//Incrementando 7 dias
$mod_date = strtotime($date . "+ 7 days");
$fechaFin =  date("Y-m-d", $mod_date);

$sql = "UPDATE biblioteca.carrito SET estado = 1, fechaRes = ?, fechaLim = ? WHERE (id_carrito = ?)";

$confirmar = prepare_query($conexion, $sql, [$date, $fechaFin, $_SESSION['carrito']['id_carrito']]);

unset($_SESSION['carrito']['id_carrito']);
if ($confirmar->error) {
    echo 0;
} else {
    echo 1;
    $codigo = $_SESSION['carrito']['sCodigo'];
    $correo = $_SESSION['User']['Email'];
    enviarMail($correo, 'Reserva de libros', "Se a reaizado con exito la reserva de tus libros tu codigo para retirar la reserva es $codigo");
    
}
