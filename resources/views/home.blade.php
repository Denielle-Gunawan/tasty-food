<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tasty Food || Home</title>

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        </div>
    </nav>

    <!-- navbar end -->

    <!-- home start-->
    <section class="container-home row-md-12" id="home">
        <div class="ctn">
            <h1 class="title-one col">HEALTHY</h1>
            <h1 class="title-two col">TASTY FOOD</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasallus ornare,
                augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem
                eget lacus. Nullam vitae dignissim neque, vel luctus es. Fusce sit amet <br>viverra ante.
            </p>
            <a href="/tentang" class="btn-tentang col">TENTANG KAMI</a>
        </div>
        <img src="{{ asset('img/img5.png') }}" class="banner img-fluid d-flex">
    </section>
    <!-- home end-->

    <!-- tentang start-->
    <section class="container-tentang-fluid" id="tentang">
        <div class="ctn-tentang">
            <h3 class="title-tentang"><b>TENTANG KAMI</b></h3>
            <p class="text-tentang">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ornare, 
                augue eu rutrum commodo, dui diam convallis arcu, eget consectetur ex sem 
                eget lacus. Nullam vitae dignissim neque, vel luctus ex. Fusce sit amet viverra ante.
            </p>
        </div>
    </section>

    {{-- card tentang --}}
    <div class="container-menu-fluid" id="menu">
        <div class="card-fluid" class="row rows-cols-4">
            <div class="avatar" class="col">
                <img src="{{ asset('img/img1.png') }}" class="img-card fluid">
            </div>
            <h3 class="judul-card">Lorem Ipsum</h3>
            <p class="conten-card">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Phasecllusornare, augue eu
                rutrum commodo</p>
        </div>
        <div class="card-fluid">
            <div class="avatar" class="col">
                <img src="{{ asset('img/img2.png') }}" class="img-card">
            </div>
            <h3 class="judul-card">Lorem Ipsum</h3>
            <p class="conten-card">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Phasecllusornare, augue eu
                rutrum commodo</p>
        </div>
        <div class="card-fluid">
            <div class="avatar" class="col">
                <img src="{{ asset('img/img4.png') }}" class="img-card">
            </div>
            <h3 class="judul-card">LOREM IPSUM</h3>
            <p class="conten-card">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Phasecllusornare, augue eu
                rutrum commodo</p>
        </div>
        <div class="card-fluid">
            <div class="avatar" class="col">
                <img src="{{ asset('img/img5.png') }}" class="img-card">
            </div>
            <h3 class="judul-card">Lorem Ipsum</h3>
            <p class="conten-card">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Phasecllusornare, augue eu
                rutrum commodo</p>
        </div>
    </div>
    <!-- tentang end-->

    {{-- berita start  --}}
    <section class="container-berita col-12 col-md-12 flex-collumn" id="berita">
        <h3 href="/berita" class="judul-berita">BERITA KAMI</h3>
        <div class="container-card-berita">
            <div class="card-berita">
                <div class="avatar-berita col">
                    <img src="{{ asset('./img/img6.jpg') }}" class="img-berita">
                </div>
                <h3 class="judul-card-berita">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</h3>
                <p class="p-berita-big">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fusce scelerisque
                    magna aliquet cursus tempus. Duis viverra metus et turpis elementum elementum. Aliquam rutrum
                    placerat
                    tellus et suscipit. Curabitur facilisis lectus vitae eros malesuada eleifend. Mauris eget tellus
                    odio. Phasellus vestibulum turpis ac sem commodo, at pasuere eros consequat.</p><br>
                <a href="/berita" class="selengkapnya">
                    <p class="p-a">Baca selengkapnya</p>
                    <div class="bulat-card-big"></div>
                    <div class="bulat-card-big"></div>
                    <div class="bulat-card-big"></div>
                </a>
            </div>
            <div class="container-card-berita-mini">
                <div class="card-berita-mini">
                    <div class="avatar-berita-mini col">
                        <img src="{{ asset('./img/img16.jpg') }}" class="img-berita-mini">
                    </div>
                    <h3 class="judul-card-berita">Lorem ipsum</h3>
                    <p class="p-berita-mini">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Phasellussornare,
                        augue eu rutrum commodo,</p>
                    <a href="/berita" class="selengkapnya-mini">
                        <p class="p-a-m">Baca Selengkapnya</p>
                        <div class="bulat-card-mini"></div>
                        <div class="bulat-card-mini"></div>
                        <div class="bulat-card-mini"></div>
                    </a>
                </div>
                <div class="card-berita-mini">
                    <div class="avatar-berita-mini col">
                        <img src="{{ asset('./img/img17.jpg') }}" class="img-berita-mini">
                    </div>
                    <h3 class="judul-card-berita">Lorem ipsum</h3>
                    <p class="p-berita-mini">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Phasellussornare,
                        augue eu rutrum commodo,</p>
                    <a href="/berita" class="selengkapnya-mini">
                        <p class="p-a-m">Baca <s></s>elengkapnya</p>
                        <div class="bulat-card-mini"></div>
                        <div class="bulat-card-mini"></div>
                        <div class="bulat-card-mini"></div>
                    </a>
                </div>
                <div class="card-berita-mini">
                    <div class="avatar-berita-mini col">
                        <img src="{{ asset('./img/img18.jpg') }}" class="img-berita-mini">
                    </div>
                    <h3 class="judul-card-berita">Lorem ipsum</h3>
                    <p class="p-berita-mini">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Phasellussornare,
                        augue eu rutrum commodo,</p>
                    <a href="/berita" class="selengkapnya-mini">
                        <p class="p-a-m">Baca selengkapnya</p>
                        <div class="bulat-card-mini"></div>
                        <div class="bulat-card-mini"></div>
                        <div class="bulat-card-mini"></div>
                    </a>
                </div>
                <div class="card-berita-mini">
                    <div class="avatar-berita-mini col">
                        <img src="{{ asset('./img/img19.jpg') }}" class="img-berita-mini">
                    </div>
                    <h3 class="judul-card-berita">Lorem ipsum</h3>
                    <p class="p-berita-mini">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Phasellussornare,
                        augue eu rutrum commodo,</p>
                    <a href="/berita" class="selengkapnya-mini">
                        <p class="p-a-m">Baca selengkapnya</p>
                        <div class="bulat-card-mini"></div>
                        <div class="bulat-card-mini"></div>
                        <div class="bulat-card-mini"></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- berita end --}}

    {{-- galeri start --}}
    <section class="container-galeri my-3">
        <div class="row">
            <div class="">
                <h3 class="judul-galeri"><b>GALERI KAMI</b></h3>
            </div>
            <div class="col-4">
                <img src="{{ asset('./img/img12.jpg') }}" alt="image img-fluid" class="gambar">
            </div>
            <div class="col-4">
                <img src="{{ asset('./img/img22.jpg') }}" alt="image img-fluid" class="gambar">
            </div>
            <div class="col-4">
                <img src="{{ asset('./img/img15.jpg') }}" alt="image img-fluid" class="gambar">
            </div>
        </div>
        <div class="row ">
            <div class="col-4">
                <img src="{{ asset('./img/img8.jpg') }}" alt="image img-fluid" class="gambar">
            </div>
            <div class="col-4">
                <img src="{{ asset('./img/img9.jpg') }}" alt="image img-fluid" class="gambar">
            </div>
            <div class="col-4">
                <img src="{{ asset('./img/img11.jpg') }}" alt="image img-fluid" class="gambar">
            </div>
        </div>
        <div class="tombol-berita">
            <a href="/galeri" class="btn-galeri col">LIHAT LEBIH BANYAK</a>
        </div>
    </section>
    {{-- galeri end --}}

    {{-- footer start --}}
    <footer>
        <section class="footer">
            <div class="container-footer">
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

    {{-- footer end --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
