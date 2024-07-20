<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Pangestu Transport</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('user/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/animate.css') }}">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#top" class="logo">
                            <img src="{{ asset('user/assets/images/pangestu-h1.png') }}" class="img-fluid">

                            <!--<h2 class="text-white">Pangestu <span style="font-family: "Brush Script MT", "Courier New !important", monospace;">Transport</span></h1>-->
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Serach Start ***** -->
                        <div class="search-input">
                            <form id="search" action="#">
                                <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword"
                                    onkeypress="handle" />
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                        <!-- ***** Serach Start ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
                            <li class="scroll-to-section"><a href="#courses">Mobil</a></li>
                            <li class="scroll-to-section"><a href="#events">Wisata</a></li>
                            <li class="scroll-to-section"><a href="#contact">Kontak</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')

    <footer>
        <div class="container">
            <div class="row footer-content">
                <div class="col-lg-3">
                    <h4>Tentang Pangestu Transport</h4>
                    <p>Rental mobil di Jogja yang melayani lepas kunci, rental dengan driver dan paket wisata. Banyak
                        pilihan mobil dengan berbagai kapasitas.</p>
                </div>
                <div class="col-lg-3">
                    <h4>Contact Info</h4>
                    <b>Telpon / WA</b>
                    <p>+6285216359893</p>
                    <b>Email</b>
                    <p>pangestutransport@gmail.com</p>
                    <b>Alamat</b>
                    <p>Brunyahrejo No.913 Karangwaru, Tegalrejo, Yogyakarta</p>
                </div>
                <div class="col-lg-3">
                    <h4>Jam Operasional</h4>
                    <b>Buka 24 JAM</b>
                    <p>senin - minggu</p>
                </div>
                <div class="col-lg-3 social-icons">
                    <h4>Sosial Network</h4>
                    <a href="#">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png"
                            alt="Instagram">
                        <p>Instagram</p>
                    </a>
                    <a href="#">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg"
                            alt="Facebook">
                        <p>Facebook</p>
                    </a>
                    <a href="#">
                        <img style="width: 100px;" src="{{ asset('images/tiktok.JPG') }}" alt="TikTok">
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('user/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('user/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/isotope.min.js') }}"></script>
    <script src="{{ asset('user/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('user/assets/js/counter.js') }}"></script>
    <script src="{{ asset('user/assets/js/custom.js') }}"></script>

</body>

</html>
