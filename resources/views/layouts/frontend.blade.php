<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>{{ config('app.name')}}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

</head>
<body>

<header>
    @include('frontend.partials._header')
</header>

<main role="main">
    @yield('content')

</main>

<footer class="text-muted">
    @include('frontend.partials._footer')
</footer>


<script src="{{ mix("js/app.js") }}" ></script>
</body>
</html>