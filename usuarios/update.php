<?php require_once '../libs/header.php'; ?>

<main class="contenedor inicio">
    <h2 class="centrar__texto">Editar Perfil</h2>
    <div class="columnas__girs--6-6">
        <div>
            <img src="../assets/img/imagenes/undraw_profile_details_f8b7.svg" alt="">
        </div>
        <div class="contacto">
            <form>
                <div class='usuario__update'>
                    <label>Nombre</label>
                    <input type="text" class='inputCampo__radius1'>
                </div>
                <div class='usuario__update'>
                    <label>Apellido</label>
                    <input type="text" class='inputCampo__radius1'>
                </div>
                <div class='usuario__update'>
                    <label>Email</label>
                    <input type="text" class='inputCampo__radius1'>
                </div>
                <div class='usuario__update'>
                    <label>DNI</label>
                    <input type="text" class='inputCampo__radius1'>
                </div>
                <div class='usuario__update'>
                    <label>Telefono</label>
                    <input type="text" class='inputCampo__radius1'>
                </div>
                <input type='submit' class='btn_l btn__ok' value='Guardar' style='margin: 2rem 10rem;'>
            </form>
        </div>
    </div>
</main>

<?php require_once '../libs/footer.php'; ?>