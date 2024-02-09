<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <!-- CSS Styles -->
        <link rel="stylesheet" href="resources/css/app.css">
        <link rel="stylesheet" href="style.css">

       
    </head>
    <body class="antialiased">
       <div class="navbar">
            <a class="nav-link" href="/">Home</a>
            <a class="nav-link" href="/about">About</a>
            <a class="nav-link" href="/contact">Contact</a>
            <a class="nav-link" href="/posts">Posts</a>
       </div>
    </body>
</html>

   <!-- <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div> -->
