<?php require_once '../libs/header.php';
$sql = "SELECT * FROM usuarios WHERE Id_Usuario=?";
$cmd = prepare_select($conexion, $sql, [$_SESSION['User']['Id_Usuario']]);
if ($cmd->num_rows > 0) {
    $usuario = $cmd->fetch_assoc();
} else {
    echo 'Error';
}
?>

<style>
    .cambiar__contraseña {
        display: flex;
        align-items: center;
    }
</style>
<!-- Id_Usuario,  Nombre, Apellido, Dni, Email, Telefono, Domicilio -->
<main class="contenedor inicio">
    <h2 class="centrar__texto">Editar Perfil</h2>
    <div class="columnas__girs--6-6">
        <div>
            <img src="../assets/img/imagenes/undraw_profile_details_f8b7.svg" alt="">
        </div>
        <div class="contacto">
            <form id="formulario">
                <input id="idUsuario" type="hidden" value="<?= $_SESSION['User']['Id_Usuario'] ?>">
                <div class='usuario__update'>
                    <label>Nombre</label>
                    <input type="text" name="nombre" id="nombre" class='inputCampo__radius1' value="<?php echo $usuario['Nombre']; ?>">
                </div>
                <div class='usuario__update'>
                    <label>Apellido</label>
                    <input type="text" name="apellido" id="apellido" class='inputCampo__radius1' value="<?php echo $usuario['Apellido']; ?>">
                </div>
                <div class='usuario__update'>
                    <label>Email</label>
                    <input type="email" name="email" id="email" class='inputCampo__radius1' value="<?php echo $usuario['Email']; ?>">
                </div>
                <div class='usuario__update'>
                    <label>DNI</label>
                    <input type="text" name="dni" id="dni" class='inputCampo__radius1' value="<?php echo $usuario['Dni']; ?>">
                </div>
                <div class='usuario__update'>
                    <label>Telefono</label>
                    <input type="text" name="telefono" id="telefono" class='inputCampo__radius1' value="<?php echo $usuario['Telefono']; ?>">
                </div>
                <div class='usuario__update'>
                    <label>Domicilio</label>
                    <input type="text" name="domicilio" id="domicilio" class='inputCampo__radius1' value="<?php echo $usuario['Domicilio']; ?>">
                </div>
                <div class="cambiar__contraseña">
                    <div class='usuario__update'>
                        <label>Contraseña</label>
                        <input type="text" name="nombre" id="pass" disabled class='inputCampo__radius1' value="<?php echo $usuario['Clave']; ?>">
                    </div>
                    <div style="margin-left: 1rem;"><button type="button" class="btn btn__ok" id="updatePass">Cambiar contrasñea</button></div>
                </div>
                <input type='submit' class='btn_l btn__ok' value='Guardar' style='margin: 2rem 10rem;'>
            </form>
        </div>
    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="/biblioteca2/js/ajax/usuarios/update.js"></script>
<?php require_once '../libs/footer.php'; ?>