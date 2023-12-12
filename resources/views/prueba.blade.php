<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax View</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>
    <h1>Ajax View</h1>
    <button id="ajaxButton">Realizar Llamada Ajax</button>
    <div id="ajaxResult"></div>

    <script>
        $(document).ready(function() {
            $('#ajaxButton').click(function() {
                // Realizar una solicitud Ajax a un endpoint ficticio
                $.ajax({
                    type: 'GET',
                    url: 'http://127.0.0.1:8000/dameAnimal',
                    dataType: 'json',
                    success: function(data) {
                        //let datosFormatted = JSON.parse(data.mensaje);
                        console.log(data.datos);
                        $('#ajaxResult').text('Respuesta del servidor: ' + data.datos) ;
                    },
                    error: function(error) {
                        console.error('Error al realizar la llamada Ajax:', error);
                    }
                });
            });
        });
    </script>
</body>
</html>