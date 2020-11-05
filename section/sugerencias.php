<?php
require_once '../libs/header.php';
?>

<style>
    .comentario__Sugerencia {
        border: 2px solid #8C8C8C;
        padding: 1rem;
        margin-bottom: 2rem;
        box-shadow: 5px 5px 2px;
    }

    .foto__comentario {
        width: 40px;
        height: 40px;
        border-radius: 100%;
    }

    .perfil__comentario {
        display: flex;
        align-items: center
    }

    .name__usuario--comentaio {
        font-size: 2rem;
        margin-left: 1.2rem;
    }

    .comentario__ingresar {
        overflow: auto;
        width: 100%;
        height: 10rem;
        resize: none;
        margin-top: 1rem;
    }
</style>

<main class="contenedor inicio">
    <h2 class="centrar__texto">Por Favor mandanos tu sugerencia</h2>
    <div class="columnas__girs--6-6">
        <img src="/biblioteca2/assets/img/imagenes/undraw_Process_re_gws7.svg" alt="">
        <div>
            <div class="comentario__Sugerencia">
                <div class="perfil__comentario">
                    <img src="./51+NUIgEc9L._AC_UL600_SR462,600_.jpg" alt="" class="foto__comentario">
                    <span class="name__usuario--comentaio">Jose perez cballos</span>
                </div>
                <p>
                    Porfabor traigan dicconario no c escribit vien
                </p>
            </div>
            <div class="comentario__Sugerencia">
                <div class="perfil__comentario">
                    <img src="./51+NUIgEc9L._AC_UL600_SR462,600_.jpg" alt="" class="foto__comentario">
                    <span class="name__usuario--comentaio">santiago mangeri puca centurion cano zaman </span>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dolore ducimus deleniti reiciendis magni beatae corporis aliquam sunt numquam omnis explicabo debitis nemo dignissimos quia similique, mollitia veritatis, consequuntur nulla.

                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde dolore ducimus deleniti reiciendis magni beatae corporis aliquam sunt numquam omnis explicabo debitis nemo dignissimos quia similique, mollitia veritatis, consequuntur nulla.
                </p>
            </div>
            <div class="comentario__Sugerencia">
                <div class="perfil__comentario">
                    <img src="./51+NUIgEc9L._AC_UL600_SR462,600_.jpg" alt="" class="foto__comentario">
                    <span class="name__usuario--comentaio">leo cano</span>
                </div>
                <p>
                    no me gusta leer cierren
                </p>
            </div>
            <div>
                <div class="perfil__comentario">
                    <img src="./51+NUIgEc9L._AC_UL600_SR462,600_.jpg" alt="" class="foto__comentario">
                    <span class="name__usuario--comentaio">Nombre corto</span>
                </div>
                <textarea class="comentario__ingresar"></textarea>
                <button class="btn_l btn__ok">Comentar</button>
            </div>
        </div>
    </div>
</main>
<?php
require_once '../libs/footer.php';
?>