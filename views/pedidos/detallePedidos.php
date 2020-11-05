<?php
require_once '../../libs/header.php';
?>

<style>
    .pedido__res {
        margin-bottom: 3rem;
        background-color: #eee;
        border-radius: 3rem;
        padding: 2rem;
    }

    .img__pedido {
        width: 100px;
        height: 140px;
        text-align: center;
    }

    .contenedor__pedidos {
        margin-bottom: 3rem;
    }
</style>
<main class="contenedor inicio">
    <h2>Sus Reservas</h2>
    <table class="tabla">
        <thead>
            <th>Imagen</th>
            <th>Nombre</th>
            <th>Autor</th>
            <th>Acciones</th>
        </thead>
        <tbody id="tbody">
            <tr>
                <td><img src="/biblioteca2/section/51+NUIgEc9L._AC_UL600_SR462,600_.jpg" alt="" class="img__pedido"></td>
                <td>
                    clear code
                </td>
                <td>
                    pablo cuelo
                </td>
                <td>
                <button class="btn btn__ok acciones"><a style="color:white; text-decoration:none;" href="/biblioteca2/categorias/update.php?idCategoria=<?= $categoria['id_categoria'] ?>">Modificar</a></button>
                </td>
            </tr>
        </tbody>
    </table>
</main>
<?php
require_once '../../libs/footer.php';
?>