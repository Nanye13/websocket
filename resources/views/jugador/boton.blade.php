<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .button {
        /* display: block;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  text-align: center;
  background-color: #fa3841; */

        /* ESTILO CON ANIMACION */
        /* min-width: 300px;
  min-height: 60px; */
        width: 200px;
        height: 200px;
        font-family: "Nunito", sans-serif;
        font-size: 22px;
        text-transform: uppercase;
        letter-spacing: 1.3px;
        font-weight: 700;
        color: #313133;
        background: #4fd1c5;
        background: linear-gradient(90deg,
                rgba(129, 230, 217, 1) 0%,
                rgba(79, 209, 197, 1) 100%);
        border: none;
        border-radius: 1000px;
        box-shadow: 12px 12px 24px rgba(79, 209, 197, 0.64);
        transition: all 0.3s ease-in-out 0s;
        cursor: pointer;
        outline: none;
        position: relative;
        padding: 10px;
    }

    button::before {
        content: '';
        border-radius: 1000px;
        /* min-width: calc(300px + 12px);
      min-height: calc(60px + 12px); */

        width: 200px;
        height: 200px;
        border: 6px solid #00FFCB;
        box-shadow: 0 0 60px rgba(0, 255, 203, .64);
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        opacity: 0;
        transition: all .3s ease-in-out 0s;
    }

    .button:hover,
    .button:focus {
        color: #313133;
        transform: translateY(-6px);
    }

    button:hover::before,
    button:focus::before {
        opacity: 1;
    }

    button::after {
        content: '';
        /* width: 30px; height: 30px; */
        width: 200px;
        height: 200px;
        border-radius: 100%;
        border: 6px solid #00FFCB;
        position: absolute;
        z-index: -1;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: ring 1.5s infinite;
    }

    button:hover::after,
    button:focus::after {
        animation: none;
        display: none;
    }

    @keyframes ring {
        0% {
            /* width: 30px;
          height: 30px; */
            width: 200px;
            height: 200px;
            opacity: 1;
        }

        100% {
            width: 300px;
            height: 300px;
            opacity: 0;
        }
    }
</style>

<body style="background-color: black">
    <div class="container-fluid">
        <header style="padding: 20px"></header>

        <div style="text-align: center;">
            <label for="" style="color: white;">Equipo:</label>
        </div>
        <div style="display: grid;place-items: center;padding-top: 100px">


            <button class="button" id="boton"></button>
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

            let boton = $('#boton');
            boton.click(function(e) {
                // let message = $(this).html();
                let message = "yo" + socket.id;
                console.log(message);
                // if (e.which === 13 && !e.shiftKey) {
                    socket.emit('envioBoton', message);
                    // chatInput.html('');
                //     return false;
                // }
                window.location.href = "{{ route('espera') }}";
            })

            // socket.on('sendChatToCliente', (message) => {
            //     $('.chat-content ul').append(`<li>${message}</li>`)
            // });
            // socket.on('connection');
        });
    </script>



</body>

</html>
