<?php require_once '../../libs/header.php'; ?>
<?php
if ($_REQUEST['idLibro']) {
    $id = $_REQUEST['idLibro'];
    $sql = "SELECT l.*, i.nombre, i.path, c.nombre as categoiaN, f.nombre as formatoN FROM libros l INNER JOIN imagenes i INNER JOIN categorias c inner join  formatos f ON l.id_imagen = i.id_imagen and c.id_categoria=l.id_categoria and f.id_formato=l.id_formato where id_libro = $id";

$libros = prepare_select($conexion, $sql);
if ($libros->num_rows>0) {
    $libro = $libros->fetch_assoc();
}
var_dump($libro);

}
?>
<main class="contenedor inicio">
    <div class="columnas__girs--2">
        <div class="img__libro--detalle">
            <img src="http://localhost/biblioteca2/libros/img/<?=$libro['nombre']?>" alt="">
        </div>
        <div class="detalles">
            <h2><?=$libro['titulo']?></h2>
            <p>Por <span class="autor"><?=$libro['autor']?></span></p>
            <div class="categoria">
                <?=$libro['categoiaN']?>
            </div>
            <p class="format">Disponible formato <?=$libro['formatoN']?></p>
            <h4>Sinopsis</h4>
            <p><?=$libro['descripcion']?></p>
            <div class="positon__up">
                <button class="btn_l btn__celeste">Agregar al Carrito</button>
            </div>
        </div>
    </div>
</main>

<?php require_once '../../libs/footer.php'; ?>