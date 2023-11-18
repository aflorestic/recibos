<?php
// Obtener el valor del DNI enviado por AJAX
$dni = $_POST['dni'];

if (strlen($dni) === 8) {
    $prueba = file_get_contents('https://api.apis.net.pe/v1/dni?numero=' . $dni . '');

    // Verifica si la solicitud se completó exitosamente
    if ($prueba === false) {
        echo 'Error al realizar la solicitud a la API';
    } else {
        // Decodifica la respuesta JSON
        $data = json_decode($prueba, true);

        // Verifica si se pudo decodificar la respuesta JSON correctamente
        if ($data === null) {
            echo 'Error al decodificar la respuesta JSON';
        } else {
            // Extrae el valor del campo "nombre"
            $nombre = $data['nombre'];

            // Muestra el valor del campo "nombre"
            echo $nombre;
        }
    }
} else {
    if (strlen($dni) === 11) {
        $prueba = file_get_contents('https://api.apis.net.pe/v1/ruc?numero=' . $dni . '');
        // Verifica si la solicitud se completó exitosamente
        if ($prueba === false) {
            echo 'Error al realizar la solicitud a la API';
        } else {
            // Decodifica la respuesta JSON
            $data = json_decode($prueba, true);

            // Verifica si se pudo decodificar la respuesta JSON correctamente
            if ($data === null) {
                echo 'Error al decodificar la respuesta JSON';
            } else {
                // Extrae el valor del campo "nombre"
                $nombre = $data['nombre'];

                // Muestra el valor del campo "nombre"
                echo $nombre;
            }
        }
    }else{
        echo "No valido";
    }
}