<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="/css/app.css">

    <title>Document</title>
</head>
<body>
    <header>
        <?php function activeMenu($url){
            return request()->is($url) ? 'active' : '';     
        }?>

        <a class="{{ activeMenu('/') }}" href="{{  route('home') }}">Inicio</a>
        <a class="{{ activeMenu('saludos/*') }}" href="{{  route('saludos','Hector') }}">Saludo</a>
        <a class="{{ activeMenu('mensajes/create') }}" href="{{  route('mensajes.create') }}">Contactos</a>
        @if(auth()->check())
            <a class="{{ activeMenu('mensajes') }}" href="{{  route('mensajes.index') }}">Mensajes</a>
            <a href="/logout">Cerrar session de {{ auth()->user()->name }}</a>
        @endif

        @if (auth()->guest())
            <a class="{{ activeMenu('login') }}" href="/login">Login</a>
        @endif

    </header>

    <div class="container">
    
    @yield('contenido')

    <footer>Copyright ® {{date('y')}} </footer>

    </div>

    <script src="/js/all.js"></script>

</body>
</html>