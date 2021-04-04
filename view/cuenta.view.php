<?php require 'header.php'; ?>

    <main class="contenedor bg_cuenta sombra">
        <div class="rectangulo">
            <div class="cuenta">
                <p class="cuenta__nombre">Iniciar Sesion</p>
                <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                    <!-- Usuario -->
                    <div class="form_group">
                        <i class="icono fas fa-user"></i><input type="text" class="formulario__user" name="user" placeholder="Ingresar usuario">
                    </div>
                    
                    <!-- Contraseña -->
                    <div class="form_group">
                        <i class="icono fas fa-lock"></i><input type="password" class="formulario__password" name="password" placeholder="Ingresar contraseña">
                    </div>


                    <a class="olvidar-cuenta" href="#">¿Has olvidado tu contraseña?</a>

                    <input type="submit" name="btn_ingresar" class="btn centrar-btn" value="Ingresar">

                    <a class="no-cuenta" href="registro.php">¿No tienes cuenta? <span class="bold"> Crear Cuenta</span> </a>
                </form>
            </div>
        </div>
    </main>

<?php require 'footer.php'; ?>