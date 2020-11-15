(function () {

    window.addEventListener('load', () => {

        const xhr = new XMLHttpRequest()
        xhr.open('POST', 'http://localhost/biblioteca2/views/informes/ajax/categoriasTop.php', true)

        xhr.onload = () => {
            let datos = JSON.parse(xhr.response);
            console.log(datos);
            new Morris.Donut({
                element: 'catGrafico',
                data: [
                    { label: datos[0][1], value: datos[0][0] },
                    { label: datos[1][1], value: datos[1][0] },
                    { label: datos[2][1], value: datos[2][0] }
                ]
            });

        }
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
        xhr.send()
    })


}())