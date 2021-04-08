<?php require 'header.php'; ?>

    <main class="contenedor sombra">
    <p class="micarrito__nombre">Mi Carrito</p>
        <div class="contenedor_tabla">
            <table id="table" class="tabla">
                    <tr class="table__color">
                        <th class="bold mayusculas">Producto</th>
                        <th class="bold mayusculas">Descripcion</th>
                        <th class="bold mayusculas">Cantidad</th>
                        <th class="bold mayusculas">Precio</th>
                    </tr>
            
                    <!-- Inicio - Datos Temporales -->
                    <tr>
                        <!-- Imagen Producto -->
                        <th><img class="img_carrito" src="../img/0.jpg" alt="Imagen_Producto"></th>
                        <!-- Descripcion del producto -->
                        <th>Vestido linea A, cruzado de rayas sin cinturon</th>
                        <!-- Cantidad -->
                        <th class="carrito__cantidad">
                            <input type="button" class="btn_oper" name="add" id="add" value="+">
                            1
                            <input type="button" class="btn_oper" name="minus" id="minus" value="-">
                        </th>
                        <!-- Precio -->
                        <th>$MXN 100.00</th>
                    </tr>
                    <tr>
                        <!-- Imagen Producto -->
                        <th><img class="img_carrito" src="../img/1.jpg" alt="Imagen_Producto"></th>
                        <!-- Descripcion del producto -->
                        <th>Vestido linea A, cruzado de rayas sin cinturon</th>
                        <!-- Cantidad -->
                        <th class="carrito__cantidad">
                            <input type="button" class="btn_oper" name="add" id="add" value="+">
                            1
                            <input type="button" class="btn_oper" name="minus" id="minus" value="-">
                        </th>
                        <!-- Precio -->
                        <th>$MXN 100.00</th>
                    </tr>
            
                    <!-- Fin - Datos temporales -->
                </table>
        </div>
        <section class="subtotal">
                <!-- Datos temporales -->
                <p>Subtotal <span class="subtotal__precio"> $MXN 100.00</span> </p>
                <input type="submit" name="btn_pagar" class="btn" value="Pagar">
        </section>
        
    </main>

<?php require 'footer.php'; ?>