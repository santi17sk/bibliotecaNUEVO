<?php 
require_once '../libs/header.php';

$sql = "SELECT * FROM categorias";
$categorias = prepare_select($conexion, $sql);
?>

<main class="contenedor inicio">
    <h2 class="centrar__texto">Control de Categorias</h2>
    <table class="tabla">
        <thead>
            <th>Nombre</th>
            <th>Acciones</th>
        </thead>
        <tbody id="tbody">
            <?php if($categorias->num_rows > 0): ?>
                <?php while($categoria = $categorias->fetch_assoc()): ?>
                    <tr>
                        <td><?=$categoria['nombre']?></td>
                        <td>
                            <button class="btn btn__ok acciones"><a href="#">Modificar</a></button>
                            <button class="btn btn__danger acciones"><a class="delete" href="#" id="<?=$categoria['id_categoria']?>">Eliminar</a></button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>
</main>
<script src="/biblioteca2/js/ajax/categorias/eliminar.js"></script>
<?php require_once '../libs/footer.php' ?>