<?php require_once '../libs/header.php'; ?>

<main class="contenedor inicio">
    <h2 class="centrar__texto" style="margin: 1rem;">Crear Libro</h2>
    <div class="columnas__girs--2">
        <div class="img__libro--detalle">
            <img src="http://localhost/biblioteca2/assets/img/imagenes/amante%20de%20libro.svg" alt="">
        </div>
        <div class="detalles">
            <h2><input type="text" name="" id="" class="inputCampo__radius1"></h2>
            <p class="format">Por <span class="autor"><input type="text" name="" id="" class="inputCampo__radius1"></span></p>
            <div class="format">
                <label for="categoria">Categoria:</label>
                <select name="" id="">
                    <option selected disabled>Selecione una categoria</option>
                    <option>cat1</option>
                    <option>cat2</option>
                    <option>cat3</option>
                </select>
            </div>
            <div class="format">
                <label for="categoria">Formato:</label>
                <select name="" id="">
                    <option selected disabled>Selecione una categoria</option>
                    <option>cat1</option>
                    <option>cat2</option>
                    <option>cat3</option>
                </select>
            </div>
            <div>
                <label for="categoria">Estado:</label>
                <select name="" id="">
                    <option selected disabled>Selecione una categoria</option>
                    <option>cat1</option>
                    <option>cat2</option>
                    <option>cat3</option>
                </select>
            </div>
            <h4>Sinopsis</h4>
            <textarea name="" id="" class="texarea">
            </textarea>
            <div style="margin-top: 1rem;">
                <button class="btn btn__ok acciones">Crear</button>
            </div>
        </div>
    </div>
</main>

<?php require_once '../libs/footer.php'; ?>