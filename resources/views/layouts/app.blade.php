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
                <a href="/" class="header_logo">det Lille Lyserødt Kaffehus</a>
                <ul class="header_menu">
                    <li><a href="">About</a></li>
                    <li><a href="/products">Products</a></li>
                    <li><a href="">Cafe</a></li
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="content">
                @yield('content')
            </div>
        </main>
    </body>
</html>