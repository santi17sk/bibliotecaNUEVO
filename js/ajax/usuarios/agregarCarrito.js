(function(){
    const boton = document.querySelector('#boton');
    document.addEventListener('DOMContentLoaded', ()=>{
        boton.addEventListener('click', agregarLibro);
    })
    const agregarLibro =(e)=>{
        const idLibro = e.target.getAttribute('data-id');
        const xmlhttp = new XMLHttpRequest();
        xmlhttp.open('POST', '/biblioteca2/usuarios/ajax/agregarCarrito.php');
        xmlhttp.onreadystatechange = function(){
            if(xmlhttp.readyState === 4){
                alert(this.response);
            }
        };
        xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xmlhttp.send(`idLibro=${idLibro}`);
    }
})();