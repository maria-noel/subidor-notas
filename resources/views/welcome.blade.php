<!doctype html>
<html lang="en">

<head>
    <title>Admin - @yield('title')</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="{{ asset('css/material-kit.css?v=2.0.5') }}" rel="stylesheet" />

</head>

<body class="index-page sidebar-collapse">
    <nav class="navbar navbar-color-on-scroll navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
                    Notas </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/notas" class="nav-link">
                            <i class="material-icons">apps</i> Notas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/comisiones" class="nav-link">
                            <i class="material-icons">apps</i> Comisiones
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="page-header header-filter" data-parallax="true" style="background-image: url({{asset('/img/bg3.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <div class="brand text-center">
                        <h1>Subidor de notas</h1>
                        <h3 class="title text-center">Este es el micrositio para subir notas de alumnos</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <h2 class="title"><a href="/notas">Ver todas las notas</a></h2>
                <h2 class="title"><a href="/comisiones">Ver todas las comisiones</a></h2>
            </div>
        </div>
    </div>


    <!--   Core JS Files   -->
    <!-- <script src="{{ asset('js/bootstrap.js') }}"></script> -->

    <script src="{{ asset('js/jquery.min.js') }} " type="text/javascript"></script>
    <script src="{{ asset('js/popper.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>

    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('js/bootstrap-material-design.min.js') }}" type="text/javascript"></script>

    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/material-dashboard.js?v=2.1.1') }}"></script>
</body>

</html>