<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>asesores contables</title>
  <link rel="shortcut icon" href="../img/logo.png">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/factura.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

  <header>
    <div class="caja">
      <h1>
        <img src="../img/logo.png">
      </h1>
      <nav>
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="productos.php">Productos</a></li>
          <li><a href="#">Contacto</a></li>

        </ul>
      </nav>
    </div>
  </header>
  
  <div class="container mx-auto p-6">
    <h1 class="text-lg font-bold">RECIBO POR HONORARIOS</h1>
    
    <form class="w-full max-w-lg p-6" id="formularioprincipal">
    <div class=" relative mb-6">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          Identificado con:
        </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="nrodoc">
          <option>sin documento</option>
          <option>D.N.I.</option>
          <option>CARNET EXTRANJERA</option>
          <option>R.U.C.</option>
          <option>PASAPORTE</option>
          <option>Cédula diplomática de identidad</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </div>
      </div>


      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          NÚMERO:
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="recibide" type="text">
          <button id="search" class="bg-blue-500 p-2 rounded text-white">Search</button>
          <input type=" text" id="respo" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
        </div>
      </div>




      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Domiciliado en:
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="domicilio" type="text">
        </div>
      </div>



      <div><b>DATOS DEL SERVICIO PRESTADO</b></div>
      <div class="relative mb-6">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          ¿El servicio se prestó a título gratuito?
        </label>
        <select id="gratuito" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="gratuito">
          <option>Si</option>
          <option>No</option>

        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Descripción o tipo de servicio prestado (el nombre del servicio que se realizó):
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="concepto" type="text">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Observaciones (opcional):
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="obs" type="text">
        </div>
      </div>
      <div class="relative mb-6">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">

          Indique el tipo de Renta de Cuarta Categoría, de acuerdo al inciso aplicable del artículo 33 LIR:
        </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="inciso">
          <option>inciso A DEL ARTÍCULO 33 DE LA LEY DEL IMPUESTO A LA RENTA</option>
          <option>inciso B El desempeño de funciones de director de empresas, síndico, mandatario, gestor de negocios, albacea y actividades similares, incluyendo el desempeño de las funciones del regidor municipal o consejero regional, por las cuales perciban dietas</option>

        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </div>
      </div>
      <div class="relative mb-6">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          Retención del Impuesto a la Renta:

        </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="impus">
          <option>No</option>
          <option>Si</option>

        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </div>
      </div>
      <div class="relative mb-6">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          El pago total del servicio está siendo efectuado al momento de la emisión de este comprobante?
        </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="momen">
          <option>No</option>
          <option>Si</option>

        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </div>
      </div>
      <div class="relative mb-6">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          Medio de Pago:
        </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="formpago">
          <option>Deposito en Cuenta</option>

          <option>Giro</option>
          <option>Transferencia de Fondos</option>
          <option>Orden de Pago</option>
          <option>Tarjeta De Débito</option>
          <option>Tarjeta de Crédito emitida en el país por una empresa del Sistema Financiero</option>
          <option>Cheques con cláusula: no negociables - intransferibles - no a la orden o similar</option>
          <option>Efectivo - por operaciones donde no existe obligación de utilizar Medios de PAgo</option>
          <option>Efectivo - en los demás casos</option>
          <option>Medios de Pago Usados en Comercio Exterior</option>
          <option>Documento de EDPYMES y Cooperativas de Ahorro y Crédito</option>
          <option>Tarjeta de crédito emitida o no en el país por entes ajenos al Sistema Financiero</option>
          <option>Tarjeta de crédito emitidas en el exterior por bancos o Financieras no domiciliadas</option>

        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </div>
      </div>
      <div><b>Indique el monto de los honorarios</b></div>

      <div class="relative mb-6">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
          Tipo de Moneda:

        </label>
        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="moneda">
          <option>sol</option>
          <option>Dólar estadounidenses</option>
          <option>Dólar canadiense</option>
          <option>Libra esterlina</option>
          <option>YEN</option>
          <option>Franco suizo</option>
          <option>Euro</option>

        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
          </svg>
        </div>
      </div>

  <div class="flex flex-wrap -mx-3 mb-6">
  <div class="w-full px-3">
    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
      La suma de :
    </label>
    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="montex" type="text">
 </div>
</div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
            Monto total de los honorarios :
          </label>

          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="monto" type="text">
        </div>
      </div>
      <div class="md:flex md:items-center">
        <div class="md:w-1/3"></div>
        <div class="md:w-2/3">
          <button class="shadow bg-blue-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button" id="enviar">
            Registrar
          </button>
        </div>
      </div>
    </form>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const formulario = document.getElementById("formularioprincipal");
      const enviarBoton = document.getElementById("enviar");

      enviarBoton.addEventListener("click", function(event) {
        event.preventDefault(); // Evita la recarga de la página al enviar el formulario

        // Captura los datos del formulario
        const recibidode = document.querySelector('#recibide').value;
        const nrodoce = document.querySelector('#nrodoc').value;
        const nombres = document.querySelector('#respo').value;
        const domiciliado = document.querySelector('#domicilio').value;
        const formaPago = document.querySelector('#formpago').value; 
        const conceptot = document.querySelector('#concepto').value;
       
        const observacion = document.querySelector('#obs').value;
        const incisos = document.querySelector('#inciso').value;
        
        const montoRecibido = document.querySelector('#monto').value;

        const datos = {
          recibidode,
          nrodoce,
          nombres,
          domiciliado,
          conceptot,

          observacion,
         
          formaPago,
          incisos,
          
          montoRecibido
        };
        // Convierte el objeto a JSON
        const datosJSON = JSON.stringify(datos);

        // Almacena los datos en el localStorage
        localStorage.setItem("datosFormulario", datosJSON);

        // Muestra un mensaje de confirmación
        alert("Datos guardados en localStorage. Presione OK para redirigir.");

        // Redirige a otra página después de presionar OK en el alert
        window.location.href = "honorarios2.php";
      });
    });
  </script>

  <script>
    const dni = document.getElementById("recibide")
    const resultado = document.getElementById("respo")
    $(document).ready(function() {
      $("#search").click(function() {
        event.preventDefault();

        // Obtener el valor del campo de entrada DNI o RUC
        const dni = $("#recibide").val();
        $.ajax({
          url: "procesaDni.php", // Reemplaza "tu_script.php" con la ruta a tu archivo PHP
          type: "POST", // Puedes usar POST o GET según tus necesidades
          data: {
            dni: dni
          },
          success: function(response) {
            $("#respo").val(response);
          }
        });

      });
    });
  </script>

  <footer>
    <div class="pie-pagina">
      <div class="bloque-logo">
        <img src="../img/logo.png">
      </div>
      <div class="bloque-datos">
        <div class="seccion">
          <h2>contadores </h2>
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