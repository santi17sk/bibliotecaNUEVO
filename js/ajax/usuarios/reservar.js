(function () {

    const btnPedidos = document.getElementById('reservarPedido')
    btnPedidos.addEventListener('click', () => {
        const xhr = new XMLHttpRequest()
        xhr.open('POST', '/biblioteca2/usuarios/ajax/reservarCarrito.php', true)
        xhr.onload = () => {
            if (xhr.status === 200) {
                if (xhr.response == 1) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Reservado con exitro',
                        showConfirmButton: false,
                        timer: 1500
                    })
                    
                } else {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'error',
                        title: 'Tubimos Problemas',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            }
        }
        xhr.send()
    })
}())