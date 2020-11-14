(function () {
    const tbody = document.querySelector('#tbody');
    console.log(tbody);
    document.addEventListener('DOMContentLoaded', () => {
        tbody.addEventListener('click', (e) => {

            if (e.target.classList.contains('btn')) {
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
                                los libros que solisito son ${datos.libros}
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
    });


})();