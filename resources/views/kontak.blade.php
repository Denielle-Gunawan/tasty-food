<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tasty Food || Kontak</title>

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/kontak.css') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <section class="hero-contact">
        <div class="background img-fluid">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/home">TASTY FOOD</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/home">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/tentang">TENTANG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/berita">BERITA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/galeri">GALERI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/kontak">KONTAK</a>
                            </li>
                        </ul>
                    </div>
            </nav>
            <h1>KONTAK KAMI</h1>
        </div>
    </section>
    <!-- navbar end -->

    {{-- kontak start --}}
    <section class="container-kontak">
        <h3>KONTAK KAMI</h3>
        <div class="row">
            <div>
                <input type="text" placeholder="Subject">
            </div>
            <div>
                <input type="text" placeholder="Name">
            </div>
            <div>
                <input type="email" placeholder="Email">
            </div>
            <div class="col">
                <textarea name="" id="" rows="5" placeholder="Massage"></textarea>
            </div>
        </div>
    </section>
    {{-- kontak end --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
