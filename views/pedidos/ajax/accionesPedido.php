<?php

require_once '../../../libs/conexion.php';
require_once '../../../libs/funciones.php';

if (!empty($_REQUEST['idCarrito'])) {
    $carrito = $_REQUEST['idCarrito'];
    $sql = "UPDATE biblioteca.carrito SET estado = estado+1 WHERE (id_carrito = ?);";
    prepare_query($conexion, $sql, [$carrito]);

    $estado = "SELECT estado from carrito where (id_carrito  = ?)";
    $newEstado = prepare_select($conexion, $estado, [$carrito]);
    $newEstado = $newEstado->fetch_assoc();
}
?>

<?php
if ($newEstado['estado'] != 3) {
    $btn = "<button class='btn btn__ok detalle__lista' data-id='$carrito' style='margin-bottom: 1rem;'>Devolver</button>";
    $estado = 'Retirado';
} else {
    $date = date("Y-m-d");
    $fechaDev = "UPDATE biblioteca.carrito SET fechaLim = ? WHERE (id_carrito = ?);";
    prepare_query($conexion, $fechaDev, [$date, $carrito]);
    $btn = null;
    $estado = null;
}

?>

<?php
echo json_encode(['btn' => $btn, 'estado' => $estado]);
?>