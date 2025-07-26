<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasty Food</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("css/home.css")}}">

</head>

<body>

    {{-- nav start --}}
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid gap-4">
            <a class="navbar-brand fw-bold fs-2" href="#">TASTY FOOD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav gap-3">
                    <a class="nav-link active" href="#">HOME</a>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">TENTANG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">BERITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">GALERI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">KONTAK</a>
                    </li>
                    @auth
                        @if(in_array(auth()->user()->level, ['admin', 'staff', 'guest']))
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn logout">Logout</button>
                                </form>
                            </li>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
        <img src="ASET/img-4-2000x2000.png" alt="Tasty Food" class="hero-img img-fluid">
    </nav>


    {{-- <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid ">
            <a class="navbar-brand fw-bold fs-2" href="#">TASTY FOOD</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-4">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">TENTANG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">BERITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">GALERI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">KONTAK</a>
                    </li>
                    @auth
                    @if(in_array(auth()->user()->level, ['admin', 'staff', 'guest']))
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn logout">Logout</button>
                        </form>
                    </li>
                    @endif
                    @endauth

                </ul>
            </div>
        </div>
    </nav>
    <img src="ASET/img-4-2000x2000.png" alt="Tasty Food" class="hero-img img-fluid"> --}}
    {{-- nav end --}}


    {{-- home start --}}
    <section class="container-home pt-5 mt-5 ms-3">
            <div class="garis"></div>
            <div>
                <h1 class="">HEALTY</h1>
                <h1 class="fw-bold">TASTY FOOD</h1>
                <p class="home-p text-break">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                    ornare, augue eu rutrum
                    commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim
                    neque, vel luctus ex. Fusce sit amet <span class="block-text">viverra ante.</span></p>
            </div>
                <button class="btn btn-tentang py-2 rounded-0">TENTANG KAMI</button>
            </div>
        </div>
    </section>
    {{-- home end --}}



    {{-- tentang start --}}
    <section class="container-tentang text-center mt-5">
        <h2 class="mt-5">TENTANG KAMI</h2>
        <p class="tentang-p">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare,
            augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus.
            Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet <span class="block-text">viverra ante.</span>
        </p>
        <div class="garis-2 "></div>
    </section>
    {{-- tentang end --}}



   <section class="container-card mt-5 pt-5">
     <div class="row row-cols-md-4">
        <div class="cols-12">
            <img src="ASET/img-1.png" class="card-img-top" alt="...">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet,consectetur adipiscing elit.
                            Phasellusornare, augue eu rutrum commodo,</p>
                </div>
            </div>
        </div>
        <div class="cols-12">
            <img src="ASET/img-2.png" class="card-img-top" alt="...">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet,consectetur adipiscing elit.
                            Phasellusornare, augue eu rutrum commodo,</p>
                </div>
            </div>
        </div>
        <div class="cols-12">
            <img src="ASET/img-3.png" class="card-img-top" alt="...">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet,consectetur adipiscing elit.
                            Phasellusornare, augue eu rutrum commodo,</p>
                </div>
            </div>
        </div>
        <div class="cols-12">
            <img src="ASET/img-4.png" class="card-img-top" alt="...">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet,consectetur adipiscing elit.
                            Phasellusornare, augue eu rutrum commodo,</p>
                </div>
            </div>
        </div>
    </div>
   </section>

    {{-- <div class="container-card-fluid pt-5 mt-5">
        <div class="background row justify-content-center gap-">
            <div class="col-12 col-lg-3">
                <img src="ASET/img-1.png" class="card-img-top" alt="img-1">
                <div class="card">
                    <div class="card-body text-center">
                        <h2 class="fw-bold">LOREM IPSUM</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet,consectetur adipiscing elit.
                            Phasellusornare, augue eu rutrum commodo,</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <img src="ASET/img-2.png" class="card-img-top" alt="img-2">
                <div class="card ">
                    <div class="card-body text-center">
                        <h2 class="fw-bold">LOREM IPSUM</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet,consectetur adipiscing elit.
                            Phasellusornare, augue eu rutrum commodo,</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <img src="ASET/img-3.png" class="card-img-top" alt="img-3">
                <div class="card ">
                    <div class="card-body text-center">
                        <h2 class="fw-bold">LOREM IPSUM</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet,consectetur adipiscing elit.
                            Phasellusornare, augue eu rutrum commodo,</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <img src="ASET/img-4.png" class="card-img-top" alt="img-4">
                <div class="card ">
                    <div class="card-body text-center">
                        <h2 class="fw-bold">LOREM IPSUM</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet,consectetur adipiscing elit.
                            Phasellusornare, augue eu rutrum commodo,</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>