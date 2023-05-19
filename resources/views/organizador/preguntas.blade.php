<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FISCALIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</head>

<body style="background-image: url(img/plantilla1.jpg);">
    <div class="conatiner-fluid">

        <header>

            <div class="row">
                <div class="col-1">
                    <img src="img/logo.jpg" alt="">
                </div>
                <div class="col-4">
                    <h3 style="color: white">7MO. ANIVERSARIO DE LA FISCALÍA GENERAL DEL ESTADO DE QUERÉTARO</h3>
                </div>
            </div>

        </header>

        <br>

        <div style="margin: 10px">
            <h1 style="color: #E9A039; font-weight: bold;font-size: 40px">RALLY DE CONOCIMIENTOS</h1>
        </div>

        <div class="row"style="margin: 10px">

            <div style="text-align: center;" class="col-12">

                <h1 style="color: white; margin: 20px">Elige tu pregunta</h1>

            </div>

            @php
                $contador = 1;
            @endphp


            @foreach ($preguntas as $pregunta)
                <div style="text-align:justify;"class="col-1">
                    <table class="table table-bordered table-dark" >


                        <tbody>
                            @if ($pregunta->estatus == 0)
                            <td style="padding: 15px; padding-left: 50px; border: 5px solid black; background: #E9A039; color: white;font-weight: bold">{{ $contador }}
                        </td>
                            @else
                                <td style="padding: 15px; padding-left: 50px; border: 5px solid black"> <a style="color: white; font-weight: bold"
                                        href="{{ route('pregunta.edit', $pregunta->id), $contador }}">{{ $contador }}</a>
                                </td>
                            @endif



                        </tbody>
                    </table>
                </div>



                @php
                    $contador++;
                @endphp
            @endforeach






           
        </div>
    </div>

</body>

</html>
