<?php require 'header.php'; ?>

    <main class="contenedor bg_cuenta sombra">
        <div class="rectangulo">
            <div class="cuenta">
                <p class="titulo centrar-texto">Mi Cuenta</p>
                <!-- Mis datos -->
                <div class="form_group">
                    <table class="table cuenta_tabla">
                        <tr>
                            <td>
                                <a href="#"><i class="icono fas fa-user"></i></a>
                            </td>
                            <td>
                                Nombre: Nombre Completo </br>
                                Correo: nombre@correo.com </br>
                            </td>
                        </tr>
                        <!-- Direcciones -->
                        <tr>
                            <td>
                                <a href="../mis_direcciones.php"><i class="fas fa-address-book"></i></a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>

<?php require 'footer.php'; ?>