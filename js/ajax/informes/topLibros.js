(function () {

    window.addEventListener('load', () => {

        const xhr = new XMLHttpRequest()
        xhr.open('POST', 'http://localhost/biblioteca2/views/informes/ajax/librosTop.php', true)

        xhr.onload = () => {
            let datos = JSON.parse(xhr.response);
            console.log(datos);
            new Morris.Bar({
                element: 'barrasLibros',
                data: [
                    { y: datos[0][1], a: datos[0][0] },
                    { y: datos[1][1], a: datos[1][0] },
                    { y: datos[2][1], a: datos[2][0] }
                ],
                xkey: 'y',
                ykeys: ['a'],
                labels: ['Cantidad']
            });

        }
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
        xhr.send()
    })


}())