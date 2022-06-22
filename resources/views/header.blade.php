<!doctype html>
<html>

<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar bg-black pt-4 pb-4">
        <div class="container-fluid ">
            <a class="navbar-brand text-white" href="#"></a>
            <a class="navbar-brand" href="#"><img src="{!! asset('images/logo-blanco-1024x268.png') !!}" width="90%"
                    height="80px" class=""></a>
            <a class="navbar-brand text-white" href="#">Aprende más</a>
            <a class="navbar-brand text-white" href="#">Salón</a>
            <a class="navbar-brand text-white" href="#">Contactenos</a>
            <a class="navbar-brand text-white" href="#">Reservar Hora</a>
            <a class="navbar-brand text-white" href="#">Productos</a>
            <a class="navbar-brand text-white" href="#"></a>
            <a class="navbar-brand text-white" href="#"></a>
            <a class="navbar-brand" href="#"><img src="{!! asset('images/Car.png') !!}" width="30px" height="30px"
                    class="row">
            </a>
            <a class="navbar-brand" href="{{ route('login') }}">
                <img src="{!! asset('images/Person.png') !!}" width="30px" height="30px" class="row">
            </a>
            <a class="navbar-brand text-white" href="#"></a>
        </div>
    </nav>
</body>

</html>