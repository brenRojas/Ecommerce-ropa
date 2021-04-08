<?php require 'header.php'; ?>

    <main class="contenedor bg_registro sombra">
        <div class="rectangulo">
            <div class="cuenta">
                <p class="registro__nombre">Registrarse</p>
                <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                    <!-- Usuario -->
                    <div class="form_group">
                        <i class="icono fas fa-user"></i><input type="text" class="formulario__user" name="nombre" placeholder="Nombre Completo">
                    </div>
                    
                    <!-- Correo -->
                    <div class="form_group">
                        <i class="icono fas fa-envelope"></i><input type="text" class="formulario__email" name="email" placeholder="Correo Electrónico">
                    </div>

                    <!-- Contraseña -->
                    <div class="form_group">
                        <i class="icono fas fa-lock"></i><input type="password" class="formulario__password" name="password" placeholder="Contraseña">
                    </div>
                    
                    <!-- Repetir Contraseña -->
                    <div class="form_group">
                        <i class="icono fas fa-lock"></i><input type="password" class="formulario__password" name="password1" placeholder="Repetir contraseña">
                    </div>

                    <!-- Checkbox  -->
                    <div class="form_check">
                        <label class="container">Acepto los <span class="bold">Términos y Condiciones</span>
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    
                    <div class="centrar-texto">
                        <input type="submit" name="btn_registro" class="btn" value="Registrar">
                    </div>

                    <div class="no-cuenta">
                        <a href="cuenta.php">¿Ya tienes cuenta? <span class="bold"> Iniciar Sesión</span> </a>
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php require 'footer.php'; ?>