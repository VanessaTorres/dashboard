<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Confinamiento</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            .container-ini {
                width: 100%;  
                min-height: 100vh;
                display: -webkit-box;
                display: -webkit-flex;
                display: -moz-box;
                display: -ms-flexbox;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                padding: 15px;
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                
                position: relative;
                z-index: 1;
            }

            .container-ini::before {
                content: "";
                display: block;
                position: absolute;
                z-index: -1;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background: #e9ecef;
                background: -webkit-linear-gradient(bottom, #e9ecef, #00c6fb);
                background: -o-linear-gradient(bottom, #e9ecef, #00c6fb);
                background: -moz-linear-gradient(bottom, #e9ecef, #00c6fb);
                background: linear-gradient(bottom, #e9ecef, #00c6fb);
                opacity: 0.8;
            }

            
        </style>
    </head>
    <body>
            <div class="container-ini content" style="background-image: url('/img/offering.jpg');">
                <div class="">
                    <h1 class="title">SIPU</h1>
                    <hr class="my-4">
                    <p class="lead" style="font-size: 20px;">Bienvenido al sistema de información de practicas universitarias<br>
                        BLABLABLABLA.</p>
                    <a type="button" href="{{ route('login') }}" class="btn btn-primary btn-lg">Sistema De Información De Practicas Universitarias</a>
                    <p class="links" style="margin:20px;"><a href="#">Univalle DEV</a></p>
                </div>
            </div>
    </body>
</html>
