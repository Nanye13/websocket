<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <header style="padding: 20px">

        </header>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>N°.</th>
                <th>Equipo</th>
            </tr>
        </thead>
        <tbody id="contenido">

        </tbody>
    </table>

    <button class="btn btn-warning" id="boton">Siguiente pregunta</button>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
        crossorigin="anonymous"></script>
    <script src="https://cdn.socket.io/4.6.0/socket.io.min.js"
        integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            let ip_address = '127.0.0.1';
            let socket_port = '3000';
            let socket = io(ip_address + ':' + socket_port);

            // fUNCION PARA EMITIR A LOS JUGADORES QUE VA OTRA PREGUNTA
            let boton = $('#boton');
            boton.click(function(e) {
                // let message = $(this).html();
                let message = "nueva pregunta" + socket.id;
                console.log(message);
                // if (e.which === 13 && !e.shiftKey) {
                    socket.emit('nuevaPregunta', message);
                    // chatInput.html('');
                //     return false;
                // }
                // window.location.href = "{{ route('espera') }}";
            })


            // METODO DONDE ESCUCHA A LOS JUGADORES CUANDO APRIETAN EL BOTON
            let numero = 1;
            socket.on('jugadorBoton', (message) => {
                $('#contenido').append(`<tr><td>${numero}</td><td>${message}</td></tr>`)
                numero ++;
            });
            // socket.on('connection');
        });
    </script>


</body>

</html>
