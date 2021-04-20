<?php require 'header.php'; ?>

    <main class="contenedor bg_cuenta sombra">
        <div class="rectangulo">
            <div class="cuenta">
                <p class="titulo centrar-texto">Iniciar Sesion</p>
                <form class="formulario" action="validar_login.php" method="post">

                    <!-- Usuario -->
                    <div class="form_group">
                        <i class="icono fas fa-user"></i><input type="text" class="formulario__user" name="user" placeholder="Ingresar usuario">
                    </div>
                    
                    <!-- Contraseña -->
                    <div class="form_group">
                        <i class="icono fas fa-lock"></i><input type="password" class="formulario__password" name="password" placeholder="Ingresar contraseña">
                    </div>

                    <div class="olvidar-cuenta">
                        <a href="#">¿Has olvidado tu contraseña?</a>
                    </div>
                     
                    <div class="centrar-texto">
                        <input type="submit" name="btn_ingresar centrar-texto" class="btn" value="Ingresar">
                    </div>

                    <div class="no-cuenta">
                        <a  href="registro.php">¿No tienes cuenta? <span class="bold"> Crear Cuenta</span> </a>
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php require 'footer.php'; ?>