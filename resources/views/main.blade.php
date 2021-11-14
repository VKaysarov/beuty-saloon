<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="#" class="link-dark">Ссылка 1</a>
        <a href="#" class="link-dark">Ссылка 2</a>
        <a href="#" class="link-dark">Ссылка 3</a>
    </header>
    <div class="container">
        @yield('header')
        @yield('content')
        @yield('footer')
    </div>
</body>
</html>
