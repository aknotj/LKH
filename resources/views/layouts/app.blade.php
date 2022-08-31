<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>det Lille Lyserødt Kaffehus</title>
        <link rel="stylesheet" href="{{ secure_asset('/css/app.css') }}">
    </head>
    <body class="antialiased">
        <header>
            <nav>
                <a href="/top" class="header_logo">det Lille Lyserødt Kaffehus</a>
                @unless (Request::is('top'))
                <ul class="header_menu">
                    <li><a href="/about">About</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="/cafe">Cafe</a></li>
                    <li><a href="/contact_form">Contact</a></li>
                </ul>
                @endunless
            </nav>
        </header>
        <main>
            <div class="content">
                @yield('content')
            </div>
        </main>
        <footer>
            <p>det Lille Lyserødt Kaffehus</p>
            <p>Lyserødvej 12B, 3000 Gurre</p>
        </footer>
    </body>
</html>