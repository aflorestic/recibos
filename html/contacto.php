<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Contacto - asesores contables</title>
    <link rel="shortcut icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/contacto.css">



</head>

<body>


    <header>
        <div class="caja">
            <h1>
                <img src="../img/logo.png">
            </h1>
            <nav>
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="productos.html">Productos</a></li>
                    <li><a href="#">Contacto</a></li>

                </ul>
            </nav>
        </div>
    </header>



    <main>
        <form>  

            <label for="nombre">Nombre y Apellido</label>
            <input type="text" name="nombre" id="nombre" class="input-padron" required>

            <label for="email">Correo electrónico</label>
            <input type="email" name="correo" id="email" class="input-padron" required placeholder="email@dominio.com">

            <label for="telefono">Teléfono</label>
            <input type="tel" name="telefono" id="telefono" class="input-padron" placeholder="+(XX) XXX XXX XXX">

            <label for="mensaje">Mensaje</label>
            <textarea cols="65" name="mensaje" rows="5" id="mensaje" class="input-padron"></textarea>

            <label class="checkbox"><input type="checkbox" checked>¿Le gustaria recibir novedades de nuestra Tienda?</label>

            <input type="submit" name="contacto" value="Enviar Formulario" class="enviar">

        </form>

    </main>



    <footer>
        <div class="pie-pagina">
          <div class="bloque-logo">
            <img src="../img/logo.png">
          </div>
          <div class="bloque-datos">
            <div class="seccion">
              <h2>STORE CLOTHES MIO</h2>
              <br>
              <ul>
                <li><a href="#">Trabaja con Nosotros</a></li>
                <li><a href="#">Nosotros</a></li>
                <li><a href="#">Contáctanos</a></li>
              </ul>
            </div>
            <div class="seccion">
              <h2>ATENCIÓN AL USUARIO</h2>
              <br>
              <ul>
                <li><a href="#">Preguntas frecuentes</a></li>
                <li><a href="#">Términos y condiciones</a></li>
               
              </ul>
            </div>
            <div class="seccion">
              <h2>SIGUENOS EN:</h2>
              <br>
              <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Tiktok</a></li>
              </ul>
            </div>
          </div>
        </div>
        <p class="copyright">©asesores contables 2023 - Todos los derechos reservados</p>
      </footer>


</body>

</html>