<?php

require_once '../../libs/conexion.php';
require_once '../../libs/funciones.php';
?>


<?php if (!empty($_REQUEST['clave'])) {
    // echo 'hola';
    $busqueda = $_REQUEST['clave'];
    $allPedidos = "SELECT carrito.*, usuarios.Nick from carrito inner join usuarios where carrito.Id_Usuario=usuarios.Id_Usuario and carrito.estado != 3 and sCodigo like '%" . $busqueda . "%' order by fecha desc";
    $listaPedidos = prepare_select($conexion, $allPedidos);
} else {
    $allPedidos = "SELECT carrito.*, usuarios.Nick from carrito inner join usuarios where carrito.Id_Usuario=usuarios.Id_Usuario and carrito.estado != 3 order by fecha desc";
    $listaPedidos = prepare_select($conexion, $allPedidos);
}
?>
<?php if ($listaPedidos->num_rows > 0) : ?>
    <?php while ($listaPedido = $listaPedidos->fetch_assoc()) : ?>
        <tr>
            <td id="<?= "estadoPedido$listaPedido[id_carrito]" ?>">
                <?php if ($listaPedido['estado'] == 0) : ?>
                    <?= 'en curso' ?>
                <?php elseif ($listaPedido['estado'] == 1) : ?>
                    <?= 'Reservadoi' ?>
                <?php elseif ($listaPedido['estado'] == 2) : ?>
                    <?= 'retirado' ?>
                <?php endif ?>
            </td>
            <td>
                <?= $listaPedido['sCodigo'] ?>
            </td>
            <td>
                <?= $listaPedido['Nick'] ?>
            </td>
            <td>
                <span>
                    <?= $listaPedido['fechaRes'] ?>
                </span>
            </td>
            <td>
                <span>
                    <?= $listaPedido['fechaLim'] ?>
                </span>
            </td>
            <td>
                <input type="hidden" value="<?= $listaPedido['id_carrito'] ?>">
                <div id="<?= "acciones$listaPedido[id_carrito]" ?>">
                    <?php if ($listaPedido['estado'] == 1) : ?>
                        <button class="btn btn__ok detalle__lista" data-id="<?= $listaPedido['id_carrito'] ?>" style="margin-bottom: 1rem;">Retirar</button>
                    <?php elseif ($listaPedido['estado'] == 2) : ?>
                        <button class="btn btn__ok detalle__lista" data-id="<?= $listaPedido['id_carrito'] ?>" style="margin-bottom: 1rem;">Devolver</button>
                    <?php endif ?>
                </div>
                <button class="btn btn__ok" id="<?= $listaPedido['id_carrito'] ?>">Ver Detalles</button>
            </td>
        </tr>
    <?php endwhile ?>
<?php endif ?>