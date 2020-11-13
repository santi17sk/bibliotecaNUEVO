<?php

require_once '../../libs/header.php';

?>

<main class="contenedor inicio">
    <header class="header__block">
        <div></div>
        <h2 id='tituloIndex'>Reserva de Libros</h2>
        <input type="text" name="buscadorDeLibros" id="buscadorDeLibros" class="campo__input" placeholder="Buscar por el codigo">
    </header>
    <table>
        <table class="tabla">
            <thead>
                <th>Codigo de Reserva</th>
                <th>Usuario</th>
                <th>Fecha de Reserva</th>
                <th>Estado de la Reserba</th>
            </thead>
            <tbody id="tbody">
                <tr>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                        <span>En espera</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </table>

</main>


<?php

require_once '../../libs/footer.php';

?>