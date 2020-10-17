<?php require_once '../libs/header.php'; ?>

<main class="contenedor inicio">
    <div class="detalle__libros">
        <div class="img__libro--detalle">
            <img src="http://localhost/biblioteca2/assets/img/angeles-caidos-susan-ee-oceano-gran-travesia-juvenil-romantico-jr-cubierta-hd-calidad-portada.jpg" alt="">
        </div>
        <div class="detalles">
            <h2><input type="text" name="" id="" value="titulos van aqui" class="inputCampo__radius1"></h2>
            <p class="format">Por <span class="autor"><input type="text" name="" id="" value="autor" class="inputCampo__radius1"></span></p>
            <div class="format">
                <label for="categoria">Categoria:</label>
                <select name="" id="">
                    <option value="" selected disabled>Selecione una categoria</option>
                    <option value="">cat1</option>
                    <option value="">cat2</option>
                    <option value="">cat3</option>
                </select>
            </div>
            <div class="format">
                <label for="categoria">Formato:</label>
                <select name="" id="">
                    <option value="" selected disabled>Selecione una categoria</option>
                    <option value="">cat1</option>
                    <option value="">cat2</option>
                    <option value="">cat3</option>
                </select>
            </div>
            <div>
                <label for="categoria">Estado:</label>
                <select name="" id="">
                    <option value="" selected disabled>Selecione una categoria</option>
                    <option value="">cat1</option>
                    <option value="">cat2</option>
                    <option value="">cat3</option>
                </select>
            </div>
            <h4>Sinopsis</h4>
            <textarea name="" id="" class="texarea">Lorem ipsum dolor sit amet consectetur adipisicing elit. At eveniet officiis eligendi, sapiente ut laudantium, architecto itaque sint deserunt eum aliquam est quas asperiores corrupti tempore, cupiditate repudiandae a. Numquam
            </textarea>
            <div style="margin-top: 1rem;">
                <button class="btn_l btn__celeste acciones">Modificar</button>
                <button class="btn_l btn__danger acciones">Eliminar</button>
            </div>
        </div>
    </div>
</main>

<?php require_once '../libs/footer.php'; ?>