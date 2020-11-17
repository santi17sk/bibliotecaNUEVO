<?php require_once '../../libs/header.php'; ?>
<?php
if ($_REQUEST['idLibro']) {
    $id = $_REQUEST['idLibro'];
    $sql = "SELECT l.*, i.nombre, i.path, c.nombre as categoiaN, f.nombre as formatoN FROM libros l INNER JOIN imagenes i INNER JOIN categorias c inner join  formatos f ON l.id_imagen = i.id_imagen and c.id_categoria=l.id_categoria and f.id_formato=l.id_formato where id_libro = $id";
    $libros = prepare_select($conexion, $sql);
    if ($libros->num_rows > 0) {
        $libro = $libros->fetch_assoc();
    }
    if (!empty($_SESSION['User'])) {
        $sqlEstadoCarrito = "SELECT count(estado) from carrito where Id_Usuario = ? and estado= ?";
        $idUsuarioCarrito = $_SESSION['User']['Id_Usuario'];
        $estadoReservado1 = prepare_select($conexion, $sqlEstadoCarrito, [$idUsuarioCarrito, 1]);
        $estadoReservado2 = prepare_select($conexion, $sqlEstadoCarrito, [$idUsuarioCarrito, 2]);
        $estadoReservado1 = $estadoReservado1->fetch_assoc();
        $estadoReservado2 = $estadoReservado2->fetch_assoc();
    }
}
?>
<main class="contenedor inicio">
    <div class="columnas__girs--2">
        <div class="img__libro--detalle">
            <img src="/biblioteca2/libros/img/<?= $libro['nombre'] ?>" alt="">
        </div>
        <div class="detalles">
            <h2><?= $libro['titulo'] ?></h2>
            <p>Por <span class="autor"><?= $libro['autor'] ?></span></p>
            <div class="categoria">
                <?= $libro['categoiaN'] ?>
            </div>
            <p class="format">Disponible formato <?= $libro['formatoN'] ?></p>
            <h4>Sinopsis</h4>
            <p><?= $libro['descripcion'] ?></p>
            <div class="positon__up">
                <?php if (!empty($_SESSION['User'])) : ?>
                    <?php if ($estadoReservado1['count(estado)'] > 0) : ?>
                        <button class="btn_l btn__celeste" id="boton" data-id="1">Agregar al Carrito</button>
                    <?php elseif ($estadoReservado2['count(estado)'] > 0) : ?>
                        <button class="btn_l btn__celeste" id="boton" data-id="2">Agregar al Carrito</button>
                    <?php else : ?>
                        <button class="btn_l btn__celeste" id="boton" data-id="<?= $libro['id_libro'] ?>">Agregar al Carrito</button>
                    <?php endif ?>
                <?php else : ?>
                    <button class="btn_l btn__celeste" id="boton">Agregar al Carrito</button>
                <?php endif ?>
            </div>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="/biblioteca2/js/ajax/usuarios/agregarCarrito.js"></script>
<?php require_once '../../libs/footer.php'; ?>