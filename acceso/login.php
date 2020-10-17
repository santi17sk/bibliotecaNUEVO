<?php require_once '../libs/header.php' ?>
<main class="contenedor inicio">
    <div class="card">
        <div class="header__card">
            <h2 class="fw__400 no__margin">Inicio de Sesion</h2>
        </div>
        <div class="body__card">
            <form action="#">
                <div class="acces__grup">
                    <input type="text" name="name" id="name" placeholder="Email" class="campo__input">
                </div>
                <div class="acces__grup">
                    <input type="text" name="name" id="name" placeholder="Contraseña" class="campo__input">
                </div>
                <input type="submit" class="btn btn__ingresar">
            </form>
            <div class="body__card--footer">
                <p>¿No Eres Miembro? <span><a href="" class="click">Click Aqui</a></span></p>
            </div>
        </div>
    </div>
</main>
<?php require_once '../libs/footer.php' ?>