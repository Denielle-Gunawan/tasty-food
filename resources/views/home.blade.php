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


    <div class="container-fluid">
        <div class="row hero-section mt-lg-5 ms-lg-5 position-relative">
            <div class="col-lg-6 d-flex flex-column">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid ">
                        <a class="navbar-brand fw-bold fs-2" href="#">TASTY FOOD</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNav">
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
                <img src="ASET/img-4-2000x2000.png" alt="Tasty Food" class="hero-img img-fluid">



                <div class="container-home-fluid pt-5 mt-5 ms-3">
                    <div class="garis"></div>
                    <div>
                        <h1 class="">HEALTY</h1>
                        <h1 class="fw-bold">TASTY FOOD</h1>
                        <p class="home-p text-break">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus
                            ornare, augue eu rutrum
                            commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim
                            neque, vel luctus ex. Fusce sit amet <span class="block-text">viverra ante.</span> </p>
                    </div>
                    <div>
                        <button class="btn btn-tentang py-2 rounded-0">TENTANG KAMI</button>
                    </div>
                </div>




                <div class="section-tentang">
                    <div class="container-tentang text-center">
                        <h2 class="mt-5">TENTANG KAMI</h2>
                        <p class="tentang-p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare,
                            augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem eget lacus.
                            Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.
                        </p>
                        <div class="garis-2 justify-content-center"></div>
                    </div>
                </div>


                <div class="container-card-fluid pt-5 mt-5">
                    <div class="background">
                        <div>
                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the bulk of the card's content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>