{{--layout.blade.php--}}
<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
<header>
    <div class="container-fluid py-3">
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom bg-dark">
            <span class="fs-4">Mokausi laravel iš ITProger https://youtu.be/0Be0fX9wbXc</span>
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-white text-decoration-none" href="/">Pagrindinis</a>
                <a class="me-3 py-2 text-white text-decoration-none" href="/about">Apie mus</a>
            </nav>
            <a class="btn btn-outline-primary btn-warning text-black"  href="/review">Atsiliepimai</a>
        </div>
    </div>
</header>
<div class="container">
    @yield('main_content')
</div>
</body>
</html>
