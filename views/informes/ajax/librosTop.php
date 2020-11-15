<?php

require_once '../../../libs/conexion.php';
require_once '../../../libs/funciones.php';

$sql = "SELECT count(det_carrito.id_libro), libros.titulo FROM det_carrito 
inner join libros where det_carrito.id_libro=libros.id_libro
group by libros.titulo order by count(det_carrito.id_libro) desc limit 3";

$topLibros = prepare_select($conexion,$sql);

$topFull = array();

while($top = $topLibros->fetch_assoc()){
array_push($topFull,[$top['count(det_carrito.id_libro)'],$top['titulo']]);
}

echo json_encode($topFull);

