<?php

require_once '../../../libs/conexion.php';
require_once '../../../libs/funciones.php';

$sql = "SELECT count(det_carrito.id_libro),categorias.nombre FROM det_carrito 
inner join libros inner join
categorias
where det_carrito.id_libro=libros.id_libro and libros.id_categoria=categorias.id_categoria
group by categorias.nombre limit 3;";

$topCat = prepare_select($conexion,$sql);

$topFull = array();

while($top = $topCat->fetch_assoc()){
array_push($topFull,[$top['count(det_carrito.id_libro)'],$top['nombre']]);
}

echo json_encode($topFull);
