<?php require_once '../libs/header.php' ?>
<main class="contenedor inicio">
    <div class="card">
        <div class="header__card">
            <h2 class="fw__400 no__margin">Registrarse</h2>
        </div>
        <div class="body__card">
            <form action="#">
                <div class="acces__grup">
                    <input type="text" name="name" id="name" placeholder="Nombre Usuario" class="campo__input">
                </div>
                <div class="acces__grup">
                    <input type="text" name="name" id="name" placeholder="Nombre" class="campo__input">
                </div>
                <div class="acces__grup">
                    <input type="text" name="name" id="name" placeholder="Apellido" class="campo__input">
                </div>
                <div class="acces__grup">
                    <input type="email" name="name" id="name" placeholder="Email" class="campo__input">
                </div>
                <div class="acces__grup">
                    <input type="password" name="name" id="name" placeholder="Contraseña" class="campo__input">
                </div>
                <input type="submit" class="btn btn__ingresar" value="Registrarse">
            </form>
            <div class="body__card--footer">
                <p>¿No Eres Miembro? <span><a href="" class="click">Click Aqui</a></span></p>
            </div>
        </div>
    </div>
</main>
<?php require_once '../libs/footer.php' ?>