<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Education LMS template by Dreambuzz">
    <meta name="keywords" content="Eduhash,education,lms,seo,course,online,learning,caoch,training,tutor">
    <meta name="author" content="themeturn.com">

    <link rel="icon" href="{{asset('images/pupr.png')}}" type="image/png" />
    <title>SISIRUMBA</title>

    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="{{asset('assetsedu/vendors/bootstrap/bootstrap.css')}}">
    <!-- Iconfont Css -->
    <link rel="stylesheet" href="{{asset('assetsedu/vendors/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('assetsedu/vendors/flaticon/flaticon.css')}}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('assetsedu/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assetsedu/vendors/owl/assetsedu/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assetsedu/vendors/owl/assetsedu/owl.theme.default.min.css')}}">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="{{asset('assetsedu/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assetsedu/css/responsive.css')}}">

    <style>
        #map {
            height: 600px;
            width: 100%;
            border-radius: 0.5rem;
        }

        .carousel-container {
            width: 300px;
            /* Adjust the width as per your requirements */
            overflow: hidden;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }

        .carousel img {
            width: 100%;
            height: auto;
        }

        .carousel-button {
            cursor: pointer;
            padding: 5px;
            background-color: #333;
            color: white;
        }

        .custom-popup {
            background-color: #ffffff;
            /* Background color */
            border: 2px solid #999999;
            /* Border */
            border-radius: 10px;
            /* Border radius */
            padding: 10px;
            /* Padding */
            /* Add any other styles you want */
        }

        .leaflet-popup-content-wrapper {
            border-radius: 0.5rem;
            /* background:#edfaef; */
            font-size: 13px;
            background: linear-gradient(to top, #66ffff 0%, #ffffff 50%);
        }

        .colorthead {
            background: #669cff;
        }

        .swal-height {
            height: 7rem !important;
        }

        .swal2-styled {
            height: 40px;
            margin-top: 0;
        }

        .swal2-actions {
            height: 30px;
            margin-top: 0;
        }

        .swal2-select {
            height: 35px;
        }

        .leaflet-control-layers-overlays>label>span {
            font-size: 20px;
        }

        .leaflet-control-layers-overlays>label>span>input {
            width: 40px;
            height: auto;
        }

        .ring-container {
            position: relative;
        }

        .circle {
            width: 15px;
            height: 15px;
            background-color: red;
            border-radius: 50%;
            position: absolute;
            top: 23px;
            left: 23px;
        }

        .ringring {
            border: 3px solid red;
            -webkit-border-radius: 30px;
            height: 25px;
            width: 25px;
            position: absolute;
            left: 15px;
            top: 15px;
            -webkit-animation: pulsate 1s ease-out;
            -webkit-animation-iteration-count: infinite;
            opacity: 0.0
        }

        @-webkit-keyframes pulsate {
            0% {
                -webkit-transform: scale(0.1, 0.1);
                opacity: 0.0;
            }

            50% {
                opacity: 1.0;
            }

            100% {
                -webkit-transform: scale(1.2, 1.2);
                opacity: 0.0;
            }
        }

        .leaflet-div-ser {
            background: blue;
            border: 3px solid rgba(255, 255, 255, 0.5);
            color: blue;
            font-weight: bold;
            text-align: center;
            /* border-radius:50%; */
            /* line-height:30px;
            line-width:30px; */
            height: 30px;
            width: 30px;
        }

        .carousel {
            margin-bottom: 4rem;
        }

        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 50rem;
        }

        .carousel-item-a {
            height: 25rem;
        }

        .carousel-item>img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 50rem;
        }

        @media (min-width: 40em) {

            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;
            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .filtered {
            /* filter: contrast(100%); */
            filter: brightness(70%);
            /* filter: grayscale(140%); */
        }

        a {
            text-decoration: none;
        }

        .carousel-control-next:hover {
            background: transparent;
        }

        .carousel-control-prev:hover {
            background: transparent;
        }
    </style>

</head>

<body id="top-header">
    <header>
        <div class="header-top ">
            <div class="container-fluid container-padding">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <!-- <p>Are you interested in Joining program? <a href="#">Contact me.</a></p> -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header-right float-lg-end">
                            <!-- <a href="#">Join Now</a>
                            <a href="#">Courses</a>
                            <a href="#">Membership Login</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Menu Start -->
        <div class="site-navigation main_menu menu-transparent" id="mainmenu-area">
            <nav class="navbar navbar-expand-lg">
                <!-- <div class="container-fluid container-padding"> -->
                <img src="{{asset('images/pupr.png')}}" class="card-img-top" alt="..."
                    style="margin-left:20px;max-width: 4%;height: auto;">
                <div style="margin-left:20px; font-size:17px;" class="text-dark">
                    Direktorat Bina Teknik Sumber Daya Air <br> Direktorat Jendral Sumber Daya Air <br> Kementrian
                    Pekerjaan Umum dan Perumahan Rakyat
                </div>

                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"
                    aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse d-flex" id="navbarMenu">

                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item ">
                            <a href="{{url('/')}}" class="nav-link js-scroll-trigger" style="font-size:17px;">
                                Home
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{url('/map')}}" class="nav-link js-scroll-trigger" style="font-size:17px;">
                                Peta
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{url('/home')}}" class="nav-link js-scroll-trigger" style="font-size:17px;">
                                Admin
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbar3" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="font-size:17px;">
                                Link Terkait<i class="fa fa-angle-down" style="font-size:17px;"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbar3" style="font-size:17px;">
                                <a class="dropdown-item" href="{{url('https://www.jasatirta2.co.id/')}}">
                                    PJT II
                                </a>
                                <a class="dropdown-item " href="{{url('https://sihka.pusair-pu.go.id/')}}">
                                    SIHKA
                                </a>
                            </div>
                        </li>

                        <li class="nav-item ">
                            <a href="#" class="nav-link" style="font-size:17px;">
                                Kontak Kami
                            </a>
                        </li>
                    </ul>

                    <!-- <div class="d-flex align-items-center">
                            <div class="header-socials social-links d-none d-lg-none d-xl-block">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div> -->

                </div> <!-- / .navbar-collapse -->
                <!-- </div> / .container -->
            </nav>
        </div>
    </header>

    <div class="wrapper" style="height:750px;">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/pintuair.jpg')}}" class="bd-placeholder-img filtered" width="100%"
                        height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" /></img>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="font-size:60px;color:white">Sistem Monitoring Hidrologi untuk Saluran Irigasi
                                Tarum Barat</h1>
                            <p style="color:white">Sistem informasi untuk monitoring aliran irigasi tarum barat Provinsi
                                Jawa Barat</p>
                            <p><a class="btn btn-lg btn-outline-light" href="#">Lihat Peta</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/citarum.jpeg')}}" class="bd-placeholder-img filtered" width="100%"
                        height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" /></img>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1 style="font-size:60px;color:white">Sistem Monitoring Hidrologi untuk Saluran Irigasi
                                Tarum Barat</h1>
                            <p style="color:white">Sistem informasi untuk monitoring aliran irigasi tarum barat Provinsi
                                Jawa Barat</p>
                            <p><a class="btn btn-lg btn-outline-light" href="#">Lihat Peta</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/citarum2.jpeg')}}" class="bd-placeholder-img filtered" width="100%"
                        height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777" /></img>

                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1 style="font-size:60px;color:white">Sistem Monitoring Hidrologi untuk Saluran Irigasi
                                Tarum Barat</h1>
                            <p style="color:white">Sistem informasi untuk monitoring aliran irigasi tarum barat Provinsi
                                Jawa Barat</p>
                            <p><a class="btn btn-lg btn-outline-light" href="#">Lihat Peta</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Banner Section end -->

    <!-- Feature section start -->
    <section class="feature section-padding pb-0" style="background:#20B2AA;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="section-heading center-heading">
                        <span class="subheading text-white">Sistem Terpadu</span>
                        <h3>SISIRUMBA</h3>
                        <p class="text-white">Sistem Informasi Terpadu untuk Monitoring Hidrologi Saluran Irigasi Tarum
                            Barat</p>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-lg-3 col-md-6 col-xl-3">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <img src="{{asset('images/map.png')}}" alt="">
                        </div>
                        <div class="feature-text">
                            <h4>Peta Geolokasi</h4>
                            <p class="text-white">Disertai dengan data pos pada tiap koordinat titik lokasi</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xl-3">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <img src="{{asset('images/cctv-camera.png')}}" alt="">
                        </div>
                        <div class="feature-text">
                            <h4>Pantuan CCTV</h4>
                            <p class="text-white">Sistem telemetri ini juga dilengkapi dengan pantauan CCTV 24 jam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xl-3">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <img src="{{asset('images/statistics.png')}}" alt="">
                        </div>
                        <div class="feature-text">
                            <h4>Grafik Statistik</h4>
                            <p class="text-white">Sistem ini juga dapat menampilkan grafik hasil pemantauan sensor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xl-3">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <img src="{{asset('images/sheets.png')}}" alt="">
                        </div>
                        <div class="feature-text">
                            <h4>Download Data</h4>
                            <p class="text-white">Sistem ini juga dilengkapi dengan fitur download data telemetry </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature section End -->
    <section class="counter-block section-padding text-center" style="background:#6495ED;">
        <div class="section-heading center-heading">
            <span class="subheading text-white">PAPAN INFORMASI</span>
            <h3>STATUS KENDALI MUTU</h3>
            <p class="text-white">Sistem Informasi Terpadu untuk Monitoring Hidrologi Saluran Irigasi Tarum
                Barat</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 counter-inner bg-grey">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-item text-center">
                                <img src="{{asset('images/cctv.png')}}" alt="">
                                <div class="count">
                                    <span class="counter">6</span>
                                </div>
                                <h6 class="text-black"> Total CCTV Aktif</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-item text-center">
                                <img src="{{asset('images/station.png')}}" alt="">
                                <div class="count">
                                    <span class="counter">22</span>
                                </div>
                                <h6 class="text-black">Total Pos Telemetry</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-item text-center">
                                <img src="{{asset('images/station.png')}}" alt="">
                                <div class="count">
                                    <span class="counter">5</span>
                                </div>
                                <h6 class="text-black">Total Pos Non-Telemetry</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="counter-item text-center border-0">
                                <img src="{{asset('images/comment.png')}}" alt="">
                                <div class="count">
                                    <span class="counter">19</span>
                                </div>
                                <h6 class="text-black">Pos Status Baik</h6>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- <div class="counter-item text-center border-0">
                                <img src="{{asset('images/danger.png')}}" alt="">
                                <div class="count">
                                    <span class="counter">0</span>%
                                </div>
                                <h6 class="text-black">Pos Status Bahaya</h6>
                            </div> -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                            <div class="counter-item text-center border-0">
                                <img src="{{asset('images/comment.png')}}" alt="">
                                <div class="count">
                                    <span class="counter">3</span>
                                </div>
                                <h6 class="text-black">Pos Status Sedang</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-2">
                            <div class="counter-item text-center border-0">
                                <img src="{{asset('images/danger.png')}}" alt="">
                                <div class="count">
                                    <span class="counter">0</span>
                                </div>
                                <h6 class="text-black">Pos Status Jelek</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- <div class="counter-item text-center border-0">
                                <img src="{{asset('images/danger.png')}}" alt="">
                                <div class="count">
                                    <span class="counter">0</span>%
                                </div>
                                <h6 class="text-black">Pos Status Bahaya</h6>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section Start -->
    <section class="about-section section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="video-block">
                        <img src="{{asset('images/cctv-capture.jpg')}}" alt="" class="img-fluid">
                        <!-- <a href="#" class="video-icon"><i class="fa fa-play"></i></a> -->
                    </div>
                </div>

                <div class="col-xl-6 pl-5 col-lg-6">
                    <div class="section-heading mt-4 mt-lg-0 ">
                        <span class="subheading">Fitur Unggulan</span>
                        <h3>Monitoring full CCTV 24 jam</h3>
                        <p>Deteksi dini adanya kenaikan atau penurunan status debit air via gambar visual maupun live
                            streaming </p>

                    </div>
                    <ul class="about-features">
                        <li>
                            <i class="fa fa-check"></i>
                            <h5>Gambar dengan High Quality</h5>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <h5>Diperkuat dengan daya ramah lingkungan</h5>
                        </li>
                    </ul>

                    <!-- <a href="#" class="btn btn-main">Contoh Gambar</a> -->
                </div>
            </div>
        </div>
    </section>
    <section class="about-section section-padding bg-grey">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 pl-5 col-lg-6">
                    <div class="section-heading mt-4 mt-lg-0 ">
                        <span class="subheading">Fitur Unggulan</span>
                        <h3>Management Data Pos</h3>
                        <p>Disertai fitur untuk management data untuk pos hidrologi disertai dengan tampilan admin yang menarik</p>

                    </div>
                    <ul class="about-features">
                        <li>
                            <i class="fa fa-check"></i>
                            <h5>Desain Responsive</h5>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <h5>Fitur Management Data</h5>
                        </li>
                    </ul>

                    <!-- <a href="#" class="btn btn-main">Contoh Admin</a> -->
                </div>
                <div class="col-xl-6 col-lg-6">
                    <!-- <div class="video-block"> -->
                    <img src="{{asset('images/managementpos.png')}}" alt="" class="img-fluid">
                    <!-- <a href="#" class="video-icon"><i class="fa fa-play"></i></a> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
    <section class="about-section section-padding" style="background:#ADD8E6;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <!-- <div class="video-block"> -->
                    <img src="{{asset('images/neracaair.png')}}" alt="" class="img-fluid">
                    <!-- <a href="#" class="video-icon"><i class="fa fa-play"></i></a> -->
                    <!-- </div> -->
                </div>
                <div class="col-xl-6 pl-5 col-lg-6">
                    <div class="section-heading mt-4 mt-lg-0 ">
                        <span class="subheading">Fitur Unggulan</span>
                        <h3>Neraca Air</h3>
                        <p>Sistem ini juga memilki fitur untuk melihat data neraca air</p>

                    </div>
                    <ul class="about-features">
                        <li>
                            <i class="fa fa-check"></i>
                            <h5>Desain Responsive</h5>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <h5>Fitur Management Data</h5>
                        </li>
                    </ul>

                    <!-- <a href="#" class="btn btn-main">Contoh Data</a> -->
                </div>
            </div>
        </div>
    </section>
    <section class="about-section section-padding" style="background:#e6fff9;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 pl-5 col-lg-6">
                    <div class="section-heading mt-4 mt-lg-0 ">
                        <span class="subheading">Kegiatan Unggulan</span>
                        <h3>Visit Lokasi</h3>
                        <p>Pihak PJT II maupun dari dinas, melakukan cek fisik secara berkala terhadap pos - pos yg terpasang</p>

                    </div>
                    <ul class="about-features">
                        <li>
                            <i class="fa fa-check"></i>
                            <h5>Pemeriksaan Rutin</h5>
                        </li>
                        <li>
                            <i class="fa fa-check"></i>
                            <h5>Maintenance Terjadwal</h5>
                        </li>
                    </ul>

                    <!-- <a href="#" class="btn btn-main">Contoh Admin</a> -->
                </div>
                <div class="col-xl-6 col-lg-6">
                    <!-- <div class="video-block"> -->
                    <img style="width: 550px; height: 400px; object-fit: none;" src="{{asset('images/cekair.jpg')}}" alt="" class="img-fluid">
                    <!-- <a href="#" class="video-icon"><i class="fa fa-play"></i></a> -->
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- About Section END -->
    <!-- <section class="section-padding popular-course bg-grey">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="section-heading center-heading">
                        <span class="subheading">Trending Courses</span>
                        <h3>Popular Online Courses Around You</h3>
                        <p>The ultimate planning solution for
                            busy women who want to reach their personal goals</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="course-block">
                        <div class="course-img">
                            <img src="{{asset('assetsedu/images/course/course-1.jpg')}}" alt="" class="img-fluid">
                            <div class="course-price ">$120 </div>
                        </div>

                        <div class="course-content">
                            <span class="course-cat">Graphic design</span>
                            <h4><a href="#">Information About UI/UX Design Degree</a></h4>
                            <div class="course-meta">
                                <span class="course-student"><i class="fa fa-user-alt"></i>340 Students</span>
                                <span class="course-duration"><i class="far fa-file-alt"></i>82 Lessons</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-block">
                        <div class="course-img">
                            <img src="{{asset('assetsedu/images/course/course-3.jpg')}}" alt="" class="img-fluid">
                            <div class="course-price ">$100 </div>
                        </div>

                        <div class="course-content">
                            <span class="course-cat">Web design</span>
                            <h4><a href="#">React – The Complete Guide (React Router)</a></h4>
                            <div class="course-meta">
                                <span class="course-student"><i class="fa fa-user-alt"></i>340 Students</span>
                                <span class="course-duration"><i class="far fa-file-alt"></i>82 Lessons</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="course-block">
                        <div class="course-img">
                            <img src="{{asset('assetsedu/images/course/course-2.jpg')}}" alt="" class="img-fluid">
                            <div class="course-price ">$100 </div>
                        </div>

                        <div class="course-content">
                            <span class="course-cat">photography</span>
                            <h4><a href="#">Photography Crash Course for Photographer</a></h4>

                            <div class="course-meta">
                                <span class="course-student"><i class="fa fa-user-alt"></i>340 Students</span>
                                <span class="course-duration"><i class="far fa-file-alt"></i>82 Lessons</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="text-center mt-5">
                        Take the control of their life back and start doing things to make their dream come true. <a
                            href="course.html" class="font-weight-bold text-underline">View all courses </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- COunter Section start -->
    <!-- <section class="counter-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-10">
                    <div class="section-heading">
                        <span class="subheading">Maximize your potentials</span>
                        <h3>We break down barriers so teams can focus on what matters – learning together to create
                            online career you love.</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <h6>Instructors</h6>
                        <div class="count">
                            <span class="counter">90</span>
                        </div>
                        <p>Tempus imperdiet nulla malpellen tesque Malesuada libero</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <h6>Total Courses</h6>
                        <div class="count">
                            <span class="counter">1450</span>
                        </div>
                        <p>Tempus imperdiet nulla malpellen tesque Malesuada libero</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <h6>Registered Enrolls</h6>
                        <div class="count">
                            <span class="counter">5697</span>
                        </div>
                        <p>Tempus imperdiet nulla malpellen tesque Malesuada libero</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="counter-item">
                        <h6>Satisfaction rate</h6>
                        <div class="count">
                            <span class="counter">100</span>%
                        </div>
                        <p>Tempus imperdiet nulla malpellen tesque Malesuada libero</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- COunter Section END -->

    <!-- About Section Start -->
    <!-- <section class="about-section section-padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="section-heading ">
                        <span class="subheading">Self Development Course</span>
                        <h3>Get Instant Access To <span> Expert solution</span></h3>
                        <p>The ultimate planning solution for busy women who want to reach their personal
                            goals.Effortless comfortable eye-catching unique detail </p>
                    </div>

                    <div class="about-text-block">
                        <div class="icon-box">
                            <i class="flaticon-video-camera"></i>
                        </div>
                        <div class="about-desc">
                            <h4>Sign up in website</h4>
                            <p>The right mentoring relationship can be a powerful tool for professional growth. Bark up
                                the right tree.</p>
                        </div>
                    </div>

                    <div class="about-text-block">
                        <div class="icon-box">
                            <i class="flaticon-flag"></i>
                        </div>
                        <div class="about-desc">
                            <h4>Enroll your course</h4>
                            <p>The right mentoring relationship can be a powerful tool for professional growth. Bark up
                                the right tree.</p>
                        </div>
                    </div>
                    <div class="about-text-block">
                        <div class="icon-box border-none">
                            <i class="flaticon-video-camera"></i>
                        </div>
                        <div class="about-desc">
                            <h4>Start from now</h4>
                            <p>The right mentoring relationship can be a powerful tool for professional growth. Bark up
                                the right tree.</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="about-img">
                        <img src="{{asset('assetsedu/images/bg/about-image.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- About Section End -->

    <!-- Blog Section Start -->
    <!-- <section class="blog-section section-padding">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7">
                    <div class="section-heading center-heading">
                        <span class="subheading">Blog News</span>
                        <h3>Latest From The Blog</h3>
                        <p>The ultimate planning solution for
                            busy women who want to reach their personal goals</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-xl-4 col-md-6 ">
                    <article class="blog-post-item">
                        <div class="post-thumb">
                            <img src="{{asset('assetsedu/images/blog/blog1.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="post-item mt-4">
                            <div class="post-meta">
                                <span class="post-author">Written by <a href="#">Admin</a></span>
                                <span class="post-date"><i class="fa fa-calendar-alt me-2"></i>May 9, 2020</span>
                            </div>
                            <h4 class="post-title"><a href="blog-single.html">How to become a best sale marketer in a
                                    month!</a></h4>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-xl-4 col-md-6">
                    <article class="blog-post-item">
                        <div class="post-thumb">
                            <img src="{{asset('assetsedu/images/blog/blog2.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="post-item mt-4">
                            <div class="post-meta">
                                <span class="post-author">Written by <a href="#">Admin</a></span>
                                <span class="post-date"><i class="fa fa-calendar-alt me-2"></i>May 9, 2020</span>
                            </div>
                            <h4 class="post-title"><a href="blog-single.html">How to become a best sale marketer in a
                                    month!</a></h4>
                        </div>
                    </article>
                </div>

                <div class="col-lg-4 col-xl-4 col-md-6">
                    <article class="blog-post-item">
                        <div class="post-thumb">
                            <img src="{{asset('assetsedu/images/blog/blog3.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="post-item mt-4">
                            <div class="post-meta">
                                <span class="post-author">Written by <a href="#">Admin</a></span>
                                <span class="post-date"><i class="fa fa-calendar-alt me-2"></i>May 9, 2020</span>
                            </div>
                            <h4 class="post-title"><a href="blog-single.html">How to become a best sale marketer in a
                                    month!</a></h4>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Blog Section End -->
    <!-- <section class="subscribe section-padding pt-0">
        <div class="container">
            <div class="row align-items-center form-inner">
                <div class="col-lg-6 col-xl-6">
                    <div class="section-heading mb-0">
                        <span class="subheading">Newsletter</span>
                        <h3>Subscribe to get latest news</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-6">
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter Your Email" class="form-control">
                        <a href="#" class="btn btn-main">Subscribe</a>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer section start -->
    <section class="footer" style="background:linear-gradient(to right, #000080 50%, #ccffff 100%);">
        <!-- <div class="container"> -->
        <div class="row">
            <div class="col-lg-4 me-auto col-sm-6 col-md-6 d-flex mb-5">
                <iframe
                    src="https://maps.google.com/maps?width=100&amp;height=100&amp;hl=en&amp;q=perusahan umum jasa tirta 2&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                    height="200" width="250" style="border-radius:2.5%; padding-left:20px;"></iframe>
                <div class="widget footer-widget mb-5 mb-lg-0 text-white" style="padding-left:20px">
                    <!-- <p class="">Veniam Sequi molestias </p> -->
                    <b style="font-size:17px;">Direktorat Bina Teknik Sumber Daya Air</b>
                    <p class="text-white" style="font-size:15px;margin-top:10px;">Direktorat Jendral Sumber Daya Air<br>
                        Jl. Lurah Kawi No. 1 Jatiluhur, Kab. Purwakarta, Jawa Barat<br>
                        <i class="fa fa-phone"></i> Telp: (0264) 201972 <br>
                        <i class='fa fa-envelope'></i> Email: pjt2@jasatirta2.co.id
                    </p>
                </div>
            </div>

            <div class="col-lg-2 col-sm-6 col-md-6 col-xl-2">
                <!-- <div class="footer-widget mb-5 mb-lg-0">
                    <h5 class="widget-title">Explore</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div> -->
            </div>
            <div class="col-lg-2 col-sm-6 col-md-6 col-xl-2">
                <!-- <div class="footer-widget mb-5 mb-lg-0">
                    <h5 class="widget-title">Courses</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="#">SEO Business</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Site Development</a></li>
                        <li><a href="#">Social Marketing</a></li>
                    </ul>
                </div> -->
            </div>
            <div class="col-lg-2 col-sm-6 col-md-6 col-xl-2 d-flex"
                style="margin-top:0;margin-left: auto;margin-right: 0;display:flex;">
                <div style="    ">
                    <div class="text-dark mt-2" style="">
                        <u>
                            <b style="font-size:17px;">Menu</b>
                        </u>
                    </div>
                    <a href="{{url('/')}}" class="text-dark">Beranda</a><br>
                    <a href="{{url('/map')}}" class="text-dark">Peta</a><br>
                    <a href="{{url('/login')}}" class="text-dark">admin</a><br>
                    <!-- <a href="javascript:linkterkait()" class="text-white">Link Terkait</a><br> -->
                    <a href="#" class="text-dark">Kontak Kami</a>
                </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <div style="margin: right 20px;">
                    <img src="{{asset('images/pjt2.png')}}" height="auto" width="175"
                        style="border-radius:2.5%;margin:10px;"></img>
                    <!-- <img src="{{asset('images/pjt2.png')}}" class="" alt="..."
                    style="max-width: 10%;height: auto;"> -->
                </div>
            </div>
        </div>
        <!-- </div> -->

        <!-- <div class="footer-btm">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="copyright text-lg-start text-center">
                            <p>© Copyright EduHash Template All rights reserved.Crafted by <a
                                    href="https://themeturn.com">Dreambuzz</a> </p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <ul class="list-inline footer-contact text-lg-end text-center mt-4 mt-lg-0">
                            <li class="list-inline-item"><a href="#">Home</a></li>
                            <li class="list-inline-item"><a href="#">Courses</a></li>
                            <li class="list-inline-item"><a href="#">Blog</a></li>
                            <li class="list-inline-item"><a href="#">Support</a></li>
                            <li class="list-inline-item"><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

    <!-- Footer section End -->
    <div class="fixed-btm-top">
        <a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
    </div>




    <!-- 
Essential Scripts
=====================================-->

    <!-- Main jQuery -->
    <script src="{{asset('assetsedu/vendors/jquery/jquery.js')}}"></script>
    <!-- Bootstrap 5.1.3 -->
    <script src="{{asset('assetsedu/vendors/bootstrap/bootstrap.js')}}"></script>
    <!-- Counterup -->
    <script src="{{asset('assetsedu/vendors/counterup/waypoint.js')}}"></script>
    <script src="{{asset('assetsedu/vendors/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assetsedu/vendors/jquery.isotope.js')}}"></script>
    <script src="{{asset('assetsedu/vendors/imagesloaded.js')}}"></script>
    <script src="{{asset('assetsedu/vendors/owl/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assetsedu/vendors/google-map/map.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>
    <script src="{{asset('assetsedu/js/script.js')}}"></script>


</body>

</html>