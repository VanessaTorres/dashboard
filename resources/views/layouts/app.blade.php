<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Estibadores') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fontawesome -->
    <link href="{{ asset('librerias/fontawesome/css/all.css') }}" rel="stylesheet">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('librerias/DataTables/datatables.min.css') }}"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<style>
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
                background: #4c71dd;
                background: -webkit-linear-gradient(bottom, #4c71dd, #00c6fb);
                background: -o-linear-gradient(bottom, #4c71dd, #00c6fb);
                background: -moz-linear-gradient(bottom, #4c71dd, #00c6fb);
                background: linear-gradient(bottom, #4c71dd, #00c6fb);
                opacity: 0.8;
            }

            @import url('https://fonts.googleapis.com/css?family=Numans');

        .card{
            width: 380px;
            margin-top: auto;
            margin-bottom: auto;
            background-color: rgba(0,0,0,0.5) !important;
        }

        .card-header h3{
        color: white;
        }

        .input-group-prepend span{
            background-color: #3490dc;
            color: white;
            border:0 !important;
        }

        .login_btn{
            background-color: #3490dc;
            margin-top: 30%;
        }

</style>
<body>
    <div class="container-ini">
        <div id="app">
            <main class="py-4">
                <div class="container">
                    <div class="col-md-8">
                        <div class="card">
                                <div class="card-header">
                                    <h3>Gestión de ayudas</h3>
                                    <div class="d-flex justify-content-end social_icon">
                                    </div>
                                </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>

                                    </div>
                                @endif
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                @if(session('info'))
                                    <div class="alert alert-success" role="alert">
                                        {{session('info')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if(session('alert'))
                                    <div class="alert alert-warning" role="alert">
                                        {{session('alert')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @endif
                                @if (session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif
                                @yield('content')
                            </div>                        
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" ></script>

        <!-- Fontawesome -->
        <script src="{{ asset('librerias/fontawesome/js/all.js') }}" ></script>

        <!-- Jquery -->
        <script src="{{ asset('librerias/jquery/jquery-3.4.1.min.js') }}" ></script>

        <!-- DataTables -->
        <script src="{{ asset('librerias/DataTables/datatables.min.js') }}" ></script>

        <script>
            $(document).ready( function () {
                $('#tabla-detalle').DataTable();
            });
        </script>
    </div>
</body>

</html>
