(function () {
    const formulario = document.querySelector('#formulario');
    document.addEventListener('DOMContentLoaded', () => {
        formulario.addEventListener('submit', validarFormulario);
    });
    function validarFormulario(e) {
        e.preventDefault();
        const idUsuario = document.querySelector('#idUsuario').value;
        const nombre = document.querySelector('#nombre').value;
        const apellido = document.querySelector('#apellido').value;
        const email = document.querySelector('#email').value;
        const dni = document.querySelector('#dni').value;
        const telefono = document.querySelector('#telefono').value;
        const domicilio = document.querySelector('#domicilio').value;
        if (idUsuario === '' || nombre === '' || apellido === '' || email === '' || dni === '' || telefono === '' || domicilio === '') {
            console.log('Todos los campos son obligatorios');
            return;
        }
        const usuario = {
            idUsuario,
            nombre,
            apellido,
            email,
            dni,
            telefono,
            domicilio
        }
        peticionAJAX(usuario);
    }
    function peticionAJAX(usuario) {
        const { idUsuario, nombre, apellido, email, dni, telefono, domicilio } = usuario;
        // Aqui
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.open('POST', '/biblioteca2/usuarios/ajax/update.php', true);
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState === 4) {
                if (xmlhttp.responseText === 'Error') {
                    mostrarAlerta('¡Hubo un error al actualizar los datos!', 'error');
                    return;
                }
                mostrarAlerta('¡Actualizado Con Exito!');
            }
        };
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.send(`idUsuario=${idUsuario}&Nombre=${nombre}&Apellido=${apellido}&Dni=${dni}&Email=${email}&Telefono=${telefono}&Domicilio=${domicilio}`);
    }
    function mostrarAlerta(mensaje, tipo) {
        const divMensaje = document.createElement('div');
        divMensaje.textContent = mensaje;
        if (tipo === 'error') {
            divMensaje.classList.add('alert', 'alert__danger');
        } else {
            divMensaje.classList.add('alert', 'alert__ok');
        }
        formulario.appendChild(divMensaje);
        setTimeout(() => {
            divMensaje.remove();
        }, 3000);
    }
    const btnNewPass = document.getElementById('updatePass')
    const campoPass = document.getElementById('pass');
    btnNewPass.addEventListener('click', async () => {
        const { value: password } = await Swal.fire({
            title: 'Vamos a cambiar la contraseña',
            input: 'password',
            inputLabel: 'Nueva Contraseña',
            inputPlaceholder: 'Ingresa tu nueva Contraseña',
            inputAttributes: {
                maxlength: 10,
                autocapitalize: 'off',
                autocorrect: 'off'
            }
        })
        if (password) {
            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/biblioteca2/usuarios/ajax/updatePass.php', true);
            xhr.onload = () => {
                if (xhr.status === 200) {
                    if (xhr.response == 1) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Contraseña Cambiada existosamnete',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        campoPass.value = password
                    } else {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Ocurrio un error',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                }
            }
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
            xhr.send(`pass=${password}`);
        }
    })
})();