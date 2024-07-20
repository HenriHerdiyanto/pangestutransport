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
    {{-- <div class="col-lg-12">
        <div class="owl-carousel owl-banner">
            <div class="item item-1">
                <div class="header-text">
                    <span class="category">Our Courses</span>
                    <h2>With Scholar Teachers, Everything Is Easier</h2>
                    <p>Scholar is free CSS template designed by TemplateMo for online educational related
                        websites. This layout is based on the famous Bootstrap v5.3.0 framework.</p>
                    <div class="buttons">
                        <div class="main-button">
                            <a href="#">Request Demo</a>
                        </div>
                        <div class="icon-button">
                            <a href="#"><i class="fa fa-play"></i> What's Scholar?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <style>
        .main-banner .col-md-6 img {
            width: 100%;
            animation: moveUpDown 1s infinite alternate;
        }

        @keyframes moveUpDown {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .btn-custom {
            background-color: #17a2b8;
            color: white;
            padding: 15px 30px;
            font-size: 20px;
            /* border-radius: 25px; */
            text-transform: uppercase;
            text-align: center;
            text-decoration: none;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #138496;
            transform: scale(1.05);
        }

        .btn-custom:active {
            background-color: #117a8b;
            transform: scale(1.00);
        }

        .btn-custom:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(23, 162, 184, 0.5);
        }
    </style>
    <div class="main-banner" id="top">
        <div class="container">
            <div class="header-text">
                <div class="row">
                    @if ($banner)
                        <div class="col-md-6">
                            <h1 style="font-size: 60px; color:white;">{{ $banner->judul }}</h1>
                            <a href="#courses" class="btn btn-outline-info my-4 text-white p-3">See More..</a>
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('images/' . $banner->gambar) }}" alt="">
                        </div>
                    @else
                        <div class="col-md-12">
                            <h1 style="font-size: 60px; color:white;">No banner available.</h1>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <div class="services section" id="services">
        <div class="container">
            <div class="row">
                <!-- Sewa Harian dan Mingguan -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('user/assets/images/service-01.png') }}" alt="short courses">
                        </div>
                        <div class="main-content">
                            <h4>Sewa Harian dan Mingguan</h4>
                            <p>Layanan fleksibel untuk kebutuhan perjalanan jangka pendek Anda. Pilih dari berbagai
                                kelas mobil yang sesuai dengan kebutuhan Anda.</p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sewa Jangka Panjang -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('user/assets/images/service-02.png') }}" alt="short courses">
                        </div>
                        <div class="main-content">
                            <h4>Sewa Jangka Panjang</h4>
                            <p>Solusi ekonomis untuk kebutuhan kendaraan berkelanjutan. Nikmati tarif lebih murah dengan
                                pemeliharaan dan perawatan rutin.</p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Layanan dengan Supir -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="{{ asset('user/assets/images/service-03.png') }}" alt="short courses">
                        </div>
                        <div class="main-content">
                            <h4>Layanan dengan Supir</h4>
                            <p>Nikmati perjalanan tanpa repot dengan layanan supir profesional. Ideal untuk wisata,
                                acara khusus, atau keperluan bisnis.</p>
                            <div class="main-button">
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section courses" id="courses">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Cars</h6>
                        <h2>car's price list</h2>
                    </div>
                </div>
                @foreach ($mobil as $item)
                    <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                        <div class="events_item">
                            <div class="down-content">
                                <img src="{{ asset('images/' . $item->gambar) }}"
                                    style="height: 250px; width:cover;">
                                <div class="card-body m-4">
                                    <h4>{{ $item->nama_mobil }}</h4>
                                    <h4>Mulai {{ $item->harga }}</h4>
                                    <hr>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2M2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                                    </svg> <i style="margin-left:20px;"> {{ $item->jenis_kendaraan }}</i>
                                    <br><br>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                                    </svg> <i style="margin-left:20px;">{{ $item->banyak_kursi }} Seats</i>
                                    <br><br>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                        fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                        <path
                                            d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                                        <path
                                            d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z" />
                                    </svg> <i style="margin-left:20px;">{{ $item->jenis_mobil }}</i>
                                </div>
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    @if (@empty($item->lp1) && @empty($item->lp2) && @empty($item->lp3))
                                    @else
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false" aria-controls="flush-collapseOne">
                                                    Lepas Kunci
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingOne"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    @if (@empty($item->lp1))
                                                    @else
                                                        <p>6 JAM : Rp. {{ number_format($item->lp1) }}</p>
                                                    @endif
                                                    @if (@empty($item->lp2))
                                                    @else
                                                        <p>12 JAM : Rp. {{ number_format($item->lp2) }}</p>
                                                    @endif
                                                    <p>1 Day : Rp. {{ number_format($item->lp3) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (@empty($item->ms1) && @empty($item->ms2) && @empty($item->ms3))
                                    @else
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false" aria-controls="flush-collapseTwo">
                                                    Mobil + Supir
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingTwo"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    @if (@empty($item->ms1))
                                                    @else
                                                        <p>6 JAM : Rp. {{ number_format($item->ms1) }}</p>
                                                    @endif
                                                    @if (@empty($item->ms2))
                                                    @else
                                                        <p>12 JAM : Rp. {{ number_format($item->ms2) }}</p>
                                                    @endif
                                                    <p>1 Day : Rp. {{ number_format($item->ms3) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (@empty($item->msb1) && @empty($item->msb2) && @empty($item->msb3))
                                    @else
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false" aria-controls="flush-collapseThree">
                                                    Mobil + Supir + BBM
                                                </button>
                                            </h2>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="flush-headingThree"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    @if (@empty($item->msb1))
                                                    @else
                                                        <p>6 JAM : Rp. {{ number_format($item->msb1) }}</p>
                                                    @endif
                                                    @if (@empty($item->msb2))
                                                    @else
                                                        <p>12 JAM : Rp. {{ number_format($item->msb2) }}</p>
                                                    @endif
                                                    <p>1 Day : Rp. {{ number_format($item->msb3) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <center>
                                    <a href="" class="btn-custom">Booking Now</a>
                                </center>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12 d-flex justify-content-center">
                    <a href="" class="btn btn-lg btn-outline-info w-100 my-5">LIHAT SEMUA MOBIL</a>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="section about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-1">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Where shall we begin?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't
                                    eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                    ultrices gravida.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How do we work together?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't
                                    eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                                    ultrices gravida.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Why SCHOLAR is the best?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    There are more than one hundred responsive HTML templates to choose from
                                    <strong>Template</strong>Mo website. You can browse by different tags or categories.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Do we get the best support?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    You can also search on Google with specific keywords such as <code>templatemo
                                        business templates, templatemo gallery templates, admin dashboard templatemo,
                                        3-column templatemo, etc.</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>About Us</h6>
                        <h2>What make us the best academy online?</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid risus commodo.</p>
                        <div class="main-button">
                            <a href="#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="section fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                                    <p class="count-text ">Happy Client</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                                    <p class="count-text ">Course Hours</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter">
                                    <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                                    <p class="count-text ">Mobil Unit</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="counter end">
                                    <h2 class="timer count-title count-number" data-to="10" data-speed="1000"></h2>
                                    <p class="count-text ">Years Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="section testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="owl-carousel owl-testimonials">
                        <div class="item">
                            <p>“Please tell your friends or collegues about TemplateMo website. Anyone can access the
                                website to download free templates. Thank you for visiting.”</p>
                            <div class="author">
                                <img src="{{ asset('user/assets/images/testimonial-author.jpg') }}" alt="">
                                <span class="category">Full Stack Master</span>
                                <h4>Claude David</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”
                            </p>
                            <div class="author">
                                <img src="{{ asset('user/assets/images/testimonial-author.jpg') }}" alt="">
                                <span class="category">UI Expert</span>
                                <h4>Thomas Jefferson</h4>
                            </div>
                        </div>
                        <div class="item">
                            <p>“Scholar is free website template provided by TemplateMo for educational related
                                websites. This CSS layout is based on Bootstrap v5.3.0 framework.”</p>
                            <div class="author">
                                <img src="{{ asset('user/assets/images/testimonial-author.jpg') }}" alt="">
                                <span class="category">Digital Animator</span>
                                <h4>Stella Blair</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 align-self-center">
                    <div class="section-heading">
                        <h6>TESTIMONIALS</h6>
                        <h2>What they say about us?</h2>
                        <p>You can search free CSS templates on Google using different keywords such as templatemo
                            portfolio, templatemo gallery, templatemo blue color, etc.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="section events" id="events">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-heading">
                        <h6>Schedule</h6>
                        <h2 class="text-white">Wisata Destination</h2>
                    </div>
                </div>
                @foreach ($wisata as $item)
                    <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
                        <div class="events_item">
                            <div class="down-content">
                                <img src="{{ asset('images/' . $item->gambar) }}"
                                    style="height: 250px; width:cover;">
                                <div class="card-body m-4">
                                    <h4>{{ $item->nama_paket }}</h4>
                                    <hr>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path
                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg> <i style="margin-left:20px;">{{ $item->destinasi1 }}</i>
                                    <br><br>
                                    @if ($item->destinasi2)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                            <path
                                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                            <path
                                                d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                        </svg> <i style="margin-left:20px;">{{ $item->destinasi2 }}</i>
                                        <br><br>
                                    @endif
                                    @if ($item->destinasi3)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                            <path
                                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                            <path
                                                d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                        </svg> <i style="margin-left:20px;">{{ $item->destinasi3 }}</i>
                                        <br><br>
                                    @endif
                                    @if ($item->destinasi4)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                            <path
                                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                            <path
                                                d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                        </svg> <i style="margin-left:20px;">{{ $item->destinasi4 }}</i>
                                        <br><br>
                                    @endif
                                    @if ($item->destinasi5)
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                            <path
                                                d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                            <path
                                                d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                        </svg> <i style="margin-left:20px;">{{ $item->destinasi5 }}</i>
                                        <br><br>
                                    @endif
                                </div>
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                1 Day {{ $item->mobil1 }} : Rp. {{ $item->harga1 }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Kapasitas {{ $item->kapasitas1 }} orang</li>
                                                    <li>Sewa Mobil</li>
                                                    <li>Driver</li>
                                                    <li>BBM</li>
                                                    <li>Air Mineral</li>
                                                    <li>Fotografer</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                1 Day {{ $item->mobil2 }} : Rp. {{ $item->harga2 }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Kapasitas {{ $item->kapasitas2 }} orang</li>
                                                    <li>Sewa Mobil</li>
                                                    <li>Driver</li>
                                                    <li>BBM</li>
                                                    <li>Air Mineral</li>
                                                    <li>Fotografer</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTheree"
                                                aria-expanded="false" aria-controls="flush-collapseTheree">
                                                1 Day {{ $item->mobil3 }} : Rp. {{ $item->harga3 }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTheree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Kapasitas {{ $item->kapasitas3 }} orang</li>
                                                    <li>Sewa Mobil</li>
                                                    <li>Driver</li>
                                                    <li>BBM</li>
                                                    <li>Air Mineral</li>
                                                    <li>Fotografer</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                                aria-expanded="false" aria-controls="flush-collapseFour">
                                                1 Day {{ $item->mobil4 }} : Rp. {{ $item->harga4 }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingOne"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <ul>
                                                    <li>Kapasitas {{ $item->kapasitas4 }} orang</li>
                                                    <li>Sewa Mobil</li>
                                                    <li>Driver</li>
                                                    <li>BBM</li>
                                                    <li>Air Mineral</li>
                                                    <li>Fotografer</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <a href="" class="btn-custom">Booking Now</a>
                                </center>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <div class="contact-us section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  align-self-center">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Pangestu Transport</h2>
                        <p>Thank you for choosing our transportation. We will try to provide our best service so that
                            you
                            are satisfied and will not forget your holiday moments</p>
                        @foreach ($promo as $item)
                            <div class="special-offer">
                                <span class="offer">off<br><em>{{ $item->persen }}</em></span>
                                <h6>Batas: <em>{{ $item->batas_promo }}</em></h6>
                                <h4>{{ $item->nama_promo }} <em>{{ $item->persen }}</em> OFF!</h4>
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-us-content">
                        <form id="contact-form" action="" method="post">
                            <div class="row">
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="name" name="name" id="name"
                                            placeholder="Your Name..." autocomplete="on" required>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                            placeholder="Your E-mail..." required="">
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" id="form-submit" class="orange-button">Send Message
                                            Now</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row footer-content">
                <div class="col-lg-3">
                    <h4>Tentang Pangestu Transport</h4>
                    <p>Rental mobil di Jogja yang melayani lepas kunci, rental dengan driver dan paket wisata. Banyak
                        pilihan mobil dengan berbagai kapasitas.</p>
                </div>
                @if ($contact)
                    <div class="col-lg-3">
                        <h4>Contact Info</h4>
                        <b>Telpon / WA</b>
                        <p>{{ $contact->wa }}</p>
                        <b>Email</b>
                        <p>{{ $contact->email }}</p>
                        <b>Alamat</b>
                        <p>{{ $contact->alamat }}</p>
                    </div>
                @else
                    <div class="col-lg-3">
                        <h4>Contact Info</h4>
                        <p>Contact information is not available.</p>
                    </div>
                @endif

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
