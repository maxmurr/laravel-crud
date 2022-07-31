<!doctype html>
<html lang="en" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
    <title>Assignment 04</title>
</head>

<body class="bg-white dark:bg-slate-900 dark:text-white">
    <nav>

    </nav>

    <div class="mx-auto max-w-6xl">
        @yield('content')
    </div>
</body>

</html>