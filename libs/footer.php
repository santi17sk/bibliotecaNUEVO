        <!-- </div> -->
        <footer class="style__footer">
            <div class="contenedor">
                <div class="barra__footer">
                    <a href="">
                        <h2>Tu<span>Biblioteca</span></h2>
                    </a>
                    <div class="enlaces">
                        <div class="bloques__enlaces">
                            <div class="bloques">
                                <a href="" class="fw__700">lorem ipsum1</a>
                                <a href="">lorem ipsum1</a>
                                <a href="">lorem ipsum1</a>
                            </div>
                            <div class="bloques">
                                <a href="" class="fw__700">lorem ipsum2</a>
                                <a href="">lorem ipsum2</a>
                                <a href="">lorem ipsum3</a>
                            </div>
                            <div class="bloques">
                                <a href="" class="fw__700">lorem ipsum3</a>
                                <a href="">lorem ipsum3</a>
                                <a href="">lorem ipsum3</a>
                            </div>
                        </div>
                    </div>
                    <div class="redes__sociales">
                        <p class="fw__700">Síguenos</p>
                        <p><a href="">Facebook</a></p>
                        <p><a href="">YouTube</a></p>
                    </div>
                </div>
            </div>
            <div class="copy">
                <p class="centrar__texto no__margin">Copyright &copy; <?php echo date("Y"); ?></p>
            </div>
        </footer>
        </body>
        <div data-pushbar-id="bar__menu" data-pushbar-direction="left" class="menu__bar">
            <div data-pushbar-close class="btn__close"><i class="far fa-times-circle" style="font-size: 30px; float: right;margin: 10px;"></i></div>
            <h2 style="margin: 1rem;">Menu</h2>
            <ul>
                <li class="sub__menu">
                    <h4 class="no__margin">LIBROS</h4>
                    <ul>
                        <li><a href="/biblioteca2/libros/index.php"><i class="fas fa-angle-right"></i> Gestión de Libros</a></li>
                        <li><a href="/biblioteca2/libros/create.php"><i class="fas fa-angle-right"></i> Agregar Libro</a></li>
                    </ul>
                </li>
                <li class="sub__menu">
                    <h4 class="no__margin">USUARIOS</h4>
                    <ul>
                        <li><a href='/biblioteca2/usuarios/index.php'><i class="fas fa-angle-right"></i> Gestión de Usuarios</a></li>
                    </ul>
                </li>
                <li class="sub__menu">

                    <h4 class="no__margin">CATEGORIAS</h4>
                    <ul>
                        <li><a href='/biblioteca2/categorias/index.php'><i class="fas fa-angle-right"></i> Gestión de categorias</a></li>
                        <li><a href='/biblioteca2/categorias/create.php'><i class="fas fa-angle-right"></i> Agregar categoria</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <script src="/biblioteca2/js/sideBar/pushbar.js"></script>
        <script type="text/javascript">
            const pushbar = new Pushbar({
                blur: false,
                overlay: true,
            });
        </script>

        </html>