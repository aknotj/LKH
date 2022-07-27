<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LKH</title>
        <link rel="stylesheet" href="{{ secure_asset('/css/app.css') }}">
    </head>
    <body class="antialiased">
        <main>
            <div class="content">
                @yield('content')
            </div>
        </main>
    </body>
</html>