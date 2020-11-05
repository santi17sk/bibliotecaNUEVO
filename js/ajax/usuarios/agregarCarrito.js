(function () {
    const boton = document.querySelector('#boton');
    document.addEventListener('DOMContentLoaded', () => {
        boton.addEventListener('click', agregarLibro);
    })

    const agregarLibro = (e) => {
        const cantidad = document.getElementById('numberDePedidos');
        console.log(cantidad)
        const idLibro = e.target.getAttribute('data-id');
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.open('POST', '/biblioteca2/usuarios/ajax/agregarCarrito.php');
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState === 4) {
                if (this.response !== '') {
                    let data = JSON.parse(this.response)
                    if (data.error != '') {
                        alert(data.error)
                    } else {
                        if (data.cantidad === 1) {
                            alert('agregado con exito')
                        }
                        cantidad.innerHTML = data.cantidad
                    }
                }
            }
        };
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.send(`idLibro=${idLibro}`);
    }
})();