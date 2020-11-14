<?php

require_once '../../../libs/conexion.php';
require_once '../../../libs/funciones.php';

if (!empty($_REQUEST['idCarrito'])) {
    $idCarr = $_REQUEST['idCarrito'];
    $sql = "SELECT dc.*,u.Nick,u.Nombre,u.Apellido,l.titulo from det_carrito dc inner join libros l inner join usuarios u inner join carrito
where dc.id_libro=l.id_libro and dc.id_carrito=carrito.id_carrito and carrito.Id_Usuario=u.Id_Usuario and carrito.id_carrito=$idCarr
";
    $det = prepare_select($conexion, $sql);
    $detalle = $det->fetch_assoc();
    // var_dump($detalle);

    if ($det->num_rows > 0) {
        $libros = array();
        while ($libro = $det->fetch_assoc()) {
            array_push($libros, $libro['titulo']);
        }

        echo json_encode(['nombre' => $detalle['Nombre'], 'apellido' => $detalle['Apellido'], 'libros' => $libros, 'user' => $detalle['Nick']]);
    }
}
