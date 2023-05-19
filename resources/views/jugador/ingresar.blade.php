<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="background-color: black; color: white">
   
    <form action="{{ route('entrar') }}" method="get">
        
        <div style="height: 100vh; display: flex; justify-content: center;">
            <div style="align-self: center; width: 90%;">
                <header style="padding: 20px"></header>
                <div class="card">
                    <div class="card-header" style="text-align: center;">Ingresa al juego</div>
                    <div class="card-body" style="text-align: center;">
                        <label for="">Introduce la clave que te hemos proporcionado:</label>
                        <input type="text" class="form-control" name="clave" id="clave" />
                        <br />
                    </div>
                    <div style="text-align: center;">
                        <button class="btn btn-primary" type="submit">INGRESAR</button>

                    </div>
                    <br>
                </div>
            </div>
        </div>
    </form>
</body>

</html>
