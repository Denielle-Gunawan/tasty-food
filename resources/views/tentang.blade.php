<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tasty Food || Tentang</title>

    <!-- boostrap-->

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/tentang.css') }}">

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
            <h1>TENTANG KAMI</h1>
        </div>
    </section>
    <!-- navbar end -->

    {{-- tasty food start --}}
    <section class="container-1 my-3">
        <div class="row">
            <div class="text col-12 col-md-6">
                <h2><b>TASTY FOOD</b></h2>
                <p class="bold"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu
                        rutrum
                        commodo, dui diam
                        convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex.
                        Fusce sit amet viverra ante</b></p>
                <p class="normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, augue eu
                    rutrum
                    commodo, dui diam
                    convallis arcu, eget consectetur ex sem eget lacus. Nullam vitae dignissim neque, vel luctus ex.
                    Fusce sit amet<br> viverra ante</p>
            </div>
            <div class="jarak col-6 col-md-3">
                <img src="{{ asset('./img/img12.jpg') }}" alt="">
            </div>
            <div class="jarak col-6 col-md-3">
                <img src="{{ asset('./img/img17.jpg') }}" alt="">
            </div>
        </div>
    </section>
    {{-- tasty food end --}}

    {{-- visi start --}}
    <section class="container-visi my-3">
        <div class="row">
            <div class="image col-6 col-md-3">
                <img src="{{ asset('./img/img6.jpg') }}" alt="image">
            </div>
            <div class="image col-6 col-md-3">
                <img src="{{ asset('./img/img10.jpg') }}" alt="image">
            </div>
            <div class="col-12 col-md-6">
                <h2><b>VISI</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusece scelerisque magna
                    aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam
                    rutrum placerat tellus et suscipit. Curabitur facillisis lectus vitae eros malesuada
                    eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at
                    posuere eros consequat. Duis nec ex at ante volutpat posuere. Morbi vel nunc tortor. Nulla facilisi.
                    Nulla accumsan ullamcorper purus nec venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                    Integer imperdiet erat vel leo rutrum lobortis.
                </p>
            </div>
        </div>
    </section>
    {{-- visi end --}}

    <section class="container-misi">
        <div class="row">
            <div class="col-12 col-md-6">
                <h2><b>MISI</b></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusece scelerisque magna
                    aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam
                    rutrum placerat tellus et suscipit. Curabitur facillisis lectus vitae eros malesuada
                    eleifend. Mauris eget tellus odio. Phasellus vestibulum turpis ac sem commodo, at
                    posuere eros consequat. Duis nec ex at ante volutpat posuere. Morbi vel nunc tortor. Nulla facilisi.
                    Nulla accumsan ullamcorper purus nec venenatis. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit.
                    Integer imperdiet erat vel leo rutrum lobortis.
                </p>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ asset('./img/img16.jpg') }}" alt="image">
            </div>
        </div>
    </section>

    <footer>
        <section class="footer">
            <div class="container-footer max-widht">
                <div class="text-footer">
                    <h2>Tasty Food</h2>
                    <p>Lorem ipsum, dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim venia, quis nostrud<br>
                        exercitatin ullamco laboris nisi uy aliquip es ea commodo consequat
                    </p>
                    <div class="sosmed-link">
                        <a href=""><img src="{{ asset('img/fb1.png') }}" alt=""></a>
                        <a href=""><img src="{{ asset('img/002-twitter.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="link-footer">
                    <h3>Useful links</h3>
                    <a href="#">Blog</a>
                    <a href="#">Hewan</a>
                    <a href="#">Galeri</a>
                    <a href="#">Testimonial</a>
                </div>
                <div class="privacy-footer">
                    <h3>Privacy</h3>
                    <a href="#">Karir</a>
                    <a href="#">Tentang Kami</a>
                    <a href="#">Kontak Kami</a>
                    <a href="#">Servis</a>
                </div>
                <div class="contact-footer">
                    <h3>Contact Info</h3>
                    <div class="img-email">
                        <img src="{{ asset('./img/mail2.png') }}" alt=""><a
                            href="#">tastyfood@gmail.com</a>
                    </div>
                    <div class="img-telp">
                        <img src="{{ asset('img/call1.png') }}" alt=""><a href="#">+62 812 3456
                            7890</a>
                    </div>
                    <div class="img-addres">
                        <img src="{{ asset('img/map1.png') }}" alt=""><a href="#">Kota Bandung,
                            Jawa Barat</a>
                    </div>
                </div>
            </div>
            <div class="copyright-footer">
                <a href="#">Copyright ©2023 All rights reserved</a>
            </div>
        </section>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
