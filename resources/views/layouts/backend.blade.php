
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">


    <link href="{{ mix('css/backend.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    @include('backend.partials._navbar')
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            @include('backend.partials._sidebar')
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            @yield('main')
        </main>
    </div>
</div>
<script src="{{ mix('js/backend.js') }}"></script></body>
</html>
