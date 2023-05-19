<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="background-color: black">
    <div class="container-fluid">
        <div style="height: 100vh; display: flex; justify-content: center;">
            <div style="align-self: center; width: 90%;">
                <header style="padding: 20px; text-align: center"><label for=""
                        style="color: white"></header>
                        <input type="hidden" name="nombreEquipo" id="nombreEquipo" value="{{$equipo->id}}">
                <div style="text-align: center;">
                    <label for="" style="color: white;">Espera a que se lea la siguiente pregunta</label>

                </div>
            </div>
        </div>
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

            let id_equipo = $('#nombreEquipo').val();

            // let chatInput = $('#chatInput');
            // chatInput.keypress(function(e) {
            //     let message = $(this).html();
            //     console.log(message);
            //     if (e.which === 13 && !e.shiftKey) {
            //         socket.emit('sendChatToServer', message);
            //         chatInput.html('');
            //         return false;
            //     }
            // })

            socket.on('activoBoton', (message) => {
                // $('.chat-content ul').append(`<li>${message}</li>`)
                window.location.href = "{{ route('boton') }}";

            });
            // socket.on('connection');
        });
    </script>

</body>

</html>
