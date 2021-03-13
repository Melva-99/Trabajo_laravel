<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/acerca">Acerda de</a></li>
            <li><a href="/Portafolio">Portafolio</a></li>
            <li><a href="/contacto">Contacto</a></li>
        </ul>
    </nav>
    @yield('Contenido')
</body>
</html>
