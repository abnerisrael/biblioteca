<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('css/datatables.css')}}">
    <script src="https://kit.fontawesome.com/10b6aecd21.js" crossorigin="anonymous"></script>

    <title>Biblioteca - @yield('header_title')</title>
</head>
<body>

@include('layouts.navbar')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <h1>@yield('page_title')</h1>
            @yield('page')
        </div>
    </div>
</div>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/datatables.js')}}"></script>
@yield('page_script')
</body>
</html>
