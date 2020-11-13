(function () {
    const clickRecuperarPass = document.getElementById('recuperarPassword')
    clickRecuperarPass.addEventListener('click', async () => {
        const { value: password } = await Swal.fire({
            title: 'Ingresa el Email con el que te registarste en la cuenta',
            input: 'email',
            inputLabel: 'Te enviaremos un Email para que puedas recuperar tu contaseña',
            inputPlaceholder: 'ejemplo@gmail.com',
            inputAttributes: {
                // maxlength: 10,
                autocapitalize: 'off',
                autocorrect: 'off'
            }
        })
        if (password) {
            const xhr = new XMLHttpRequest()
            xhr.open('POST', '/biblioteca2/usuarios/ajax/recuperarPass.php', true)
            xhr.onload = async () => {
                const send = await xhr.response
                console.log(send);
                if (send == 2) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'El email ingresado no esta relacionado con ninguna cuenta',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else if (send == 1) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Te emos enviado un corroe con las inidcaciones',
                        showConfirmButton: false,
                        timer: 1500
                    })
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Ocurrio un error, intenalo nuevamente',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.send(`pass=${password}`)
        }
    })
}())