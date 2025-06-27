<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Selamat Datang</title>

    <link rel="stylesheet" href="{{ asset('../css/welcome.css') }}">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="text-dark">


    {{-- <nav class="navbar navbar-expand-lg shadow p-3 mb-5">
        <div class="container-fluid">
            <a class="navbar-brand fs-3 fw-bold text-light" href="#">Tasty Food</a>
            <div class="d-flex">
                @if (Route::has('login'))
                @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-outline-primary me-2">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-primary me-2">Login</a>
                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="btn btn-outline-secondary">Register</a>
                @endif
                @endauth
                @endif
            </div>
        </div>
    </nav> --}}


    <header class=" text-center text-white ">
        <video autoplay muted loop playsinline class="bg-video">
            <source src="/ASET/welcome2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container-2">
            <h1 class="display-4 fw-bold">Selamat Datang di Tasty Food</h1>
            <p class="lead fw-bold">Kenali berbagai pilihan makanan dunia lewat Tasty Food</p>
            @if (Route::has('login') && !Auth::check())
                <a href="{{ route('login') }}" class="btn btn-light btn-lg mt-3">Mulai Sekarang</a>
            @endif
        </div>
    </header>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>