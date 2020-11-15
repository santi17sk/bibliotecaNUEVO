(function () {
    const tbody = document.querySelector('#tbody');
    console.log(tbody);
    document.addEventListener('DOMContentLoaded', () => {
        tbody.addEventListener('click', (e) => {
            const dataId = e.target.getAttribute('data-id')
            if (e.target.classList.contains('btn') && dataId == null) {
                const idCarrito = e.target.id;
                const xmlhttp = new XMLHttpRequest();
                xmlhttp.open('POST', '/biblioteca2/views/pedidos/ajax/detallePedido.php', true);
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState === 4) {
                        let datos = JSON.parse(this.response)
                        // console.log(this.response);
                        Swal.fire({
                            title: `Detalle de la reserva de ${datos.user}`,
                            html:
                                `
                                Solisitante: ${datos.nombre} ${datos.apellido}<br>
                                Los libros que reservo son: <b>${datos.libros}</b>
                                `,
                            showCloseButton: false,
                            showCancelButton: false,
                            focusConfirm: false,
                            confirmButtonText:
                                '<i class="fa fa-thumbs-up"></i> Entendido!',
                        })
                    }
                };
                xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xmlhttp.send(`idCarrito=${idCarrito}`);
            }
        });
        tbody.addEventListener('click', (e) => {
            if (e.target.classList.contains('btn')) {
                const dataId = e.target.getAttribute('data-id')
                const contBtn = document.getElementById(`acciones${dataId}`)
                const contEstado = document.getElementById(`estadoPedido${dataId}`)
                console.log(contBtn)
                const xmlhttp = new XMLHttpRequest();
                xmlhttp.open('POST', '/biblioteca2/views/pedidos/ajax/accionesPedido.php', true);
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState === 4) {
                        const elementos = JSON.parse(this.response)
                        if (elementos.estado == null) {
                            const tr = e.target.parentElement.parentElement.parentElement;
                            tr.remove();
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'El pedido se archivo correctamente',
                                showConfirmButton: false,
                                timer: 1500
                            })
                        } else {
                            contBtn.innerHTML = elementos.btn
                            contEstado.innerHTML = elementos.estado
                        }
                    }
                };
                xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xmlhttp.send(`idCarrito=${dataId}`);
            }
        })
    });


})();