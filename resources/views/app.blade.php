<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('title', 'Hello Bamako')</title>

</head>
<body class=" py-6 flex flex-col justify-between items-center min-h-screen bg-slate-500">
    <main role="main" class="flex flex-col justify-center items-center">

        @yield('content')
    </main>

   <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

   <footer>
    <footer>
      <p class="text-gray">&copy; Copyright {{ date('Y') }}
        @if(!Route::is('about'))
        <a href="/about-us" class="text-indigo-500 hover:text-indigo-600 underline"> About-us</a></p>
        @endif
    </footer>
</footer>

</body>
</html>
