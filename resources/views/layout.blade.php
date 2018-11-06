<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('saludos','Carlos')}}">Saludos</a>
            <a href="{{ route('contactos')}}">Contacto</a>
        </nav>
    </header>
    
    @yield('contenido')
    
    <footer>Copyright</footer>
</body>
</html>