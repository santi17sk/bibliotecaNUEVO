<?php require_once '../libs/header.php' ?>

<main class="contenedor inicio">
    <header class="header__block">
        <div><button class="btn btn__ok">Agregar</button></div>
        <h2 class="centrar__texto">Control de Usuarios</h2>
        <div><input type="text" name="buscadorDeLibros" id="buscadorDeLibros" class="campo__input" placeholder="Buscar"></div>
    </header>
  
    <table class="tabla">
        <thead>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Email</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            <tr>
                <td>lorem1</td>
                <td>lorem1</td>
                <td>lorem1</td>
                <td><button class="btn btn__danger acciones">lorem</button></td>
            </tr>
            <tr>
                <td>lorem2</td>
                <td>lorem2</td>
                <td>lorem2</td>
                <td><button class="btn btn__ok acciones">lorem</button></td>
            </tr>
        </tbody>
    </table>
</main>

<?php require_once '../libs/footer.php' ?>