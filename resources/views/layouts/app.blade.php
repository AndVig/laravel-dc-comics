@include('shared.header')
@include('shared.footer')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    @vite('resources/js/app.js')
</head>
<body>
    <img src="{{ Vite::asset('resources/img/*')}}" alt="">

    <main>
        @yield('main')
    </main>
</body>
</html>