<?php

require_once '../../libs/header.php';
$allPedidos = "SELECT carrito.*, usuarios.Nick from carrito inner join usuarios where carrito.Id_Usuario=usuarios.Id_Usuario and carrito.estado != 3 order by fecha desc";

$listaPedidos = prepare_select($conexion, $allPedidos);

?>
<style>
    .filaPedido:hover {
        cursor: pointer;
        background-color: #9819c2;
        transition: all 300ms;
    }

</style>
<main class="contenedor inicio">
    <header class="header__block">
        <div></div>
        <h2 id='tituloIndex'>Reserva de Libros</h2>
        <input type="text" name="buscadorDeLibros" id="buscadorDePedidos" class="campo__input" placeholder="Buscar por el codigo">
    </header>
        <table class="tabla">
            <thead>
                <th>Estado del Pedido</th>
                <th>Codigo de Reserva</th>
                <th>Usuario</th>
                <th>Fecha de Reserva</th>
                <th>Fecha limite de Devolucion</th>
                <th>Acciones</th>
            </thead>
            <tbody id="tbody">
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
            </tbody>
        </table>

</main>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="/biblioteca2/js/ajax/pedidos/accionesPedidos.js"></script>

<?php

require_once '../../libs/footer.php';

?>