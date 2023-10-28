<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{asset('images/pupr.png')}}" type="image/png" />
    <!--plugins-->
    <link href="{{asset('CostumStyle/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/datatable/css/dataTables.dateTime.min.css')}}" rel="stylesheet" />
    <link href="{{asset('CostumStyle/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{asset('CostumStyle/css/pace.min.css')}}" rel="stylesheet" />
    <script src="{{asset('CostumStyle/js/pace.min.js')}}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{asset('CostumStyle/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('CostumStyle/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('CostumStyle/css/icons.css')}}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{asset('CostumStyle/css/dark-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('CostumStyle/css/semi-dark.css')}}" />
    <link rel="stylesheet" href="{{asset('CostumStyle/css/header-colors.css')}}" />
    <!-- Additional CSS -->
    <link rel="stylesheet" href="{{asset('CostumStyle/style.css')}}">
    <!-- <link href="{{asset('carousel/carousel.css')}}" rel="stylesheet"> -->
    <!-- Page Title -->
    <link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


    <title>SISIRUMBA</title>

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
    </style>
</head>

<!-- Bagian Body Semua Berawal Dari Sini -->

<body>
    <!--wrapper-->
    <div class="wrapper" style="background:#f8f9fa">

        <!--start header (Bagian Atas (Topbar)) -->
        <header>
            <!-- <div class="wrapper">
                <nav class="navbar navbar-expand-lg navbar-light card-body fixed-top"
                    style="display: flex;justify-content: flex-start; background:#4169E1;">
                    <img src="{{asset('images/pupr.png')}}" class="card-img-top" alt="..."
                        style="max-width: 4%;height: auto;">
                    <div style="margin-left:20px; font-size:10px;" class="text-light">
                        Direktorat Bina Teknik Sumber Daya Air <br> Direktorat Jendral Sumber Daya Air <br> Kementrian
                        Pekerjaan Umum dan Perumahan Rakyat
                    </div>
                    <div class="" style="margin-top:0;margin-left: auto;margin-right: 0;">
                        <div class="btn-group text-light">
                            <i class='bx bx-calendar'></i> &nbsp
                            <p id="nowdate"></p>
                        </div><br>
                    </div>
                </nav>
            </div> -->
            <div class="wrapper">
                <!-- <hr> -->
                <nav class="navbar card-body navbar-dark bg-dark fixed-top" style="display: flex;justify-content: flex-start;">
                    <!-- <div class="mt-1" style="display: flex;justify-content: flex-start;">
                    
                </div> -->
                    <!-- </div> -->
                    <div>
                        <h3 class="text-light">
                            <!-- <hr> -->
                            SISTEM INFORMASI SALURAN IRIGASI TARUM BARAT
                        </h3>
                    </div>
                    <div
                        style="margin-top:0;margin-left: auto;margin-right: 0;font-size:12px;display: flex;justify-content: flex-start;">
                        <a class="text-white nav-link active" href="{{url('/')}}">Beranda</a> &nbsp
                        <a class="text-white nav-link active" href="{{url('/map')}}">Peta</a> &nbsp
                        <!-- <a class="text-white nav-link active" href="javascript:linkterkait()">Link Terkait</a> &nbsp -->
                        <div class="nav-item dropdown">
                            <a class="text-white nav-link active dropdown-toggle" href="#" id="dropdown01"
                                data-bs-toggle="dropdown" aria-expanded="false">Link Terkait</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown01">
                                <li><a class="dropdown-item" href="#">PJT II</a></li>
                                <li><a class="dropdown-item" href="#">SIHKA</a></li>
                            </ul>
                        </div>
                        <a class="text-white nav-link active" href="{{url('/login')}}">Admin</a> &nbsp
                        <a class="text-white nav-link active" href="#">Kontak Kami</a>
                    </div>
                </nav>
            </div>
            <div class="wrapper">
                <div id="myCarousel" class="carousel slide bg-light" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('images/pintuair.jpg')}}" class="bd-placeholder-img filtered" width="100%"
                                height="100%" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" /></img>

                            <div class="container">
                                <div class="carousel-caption text-start">
                                    <h1 style="font-size:60px;color:white">Sistem Monitoring Hidrologi untuk Saluran Irigasi Tarum Barat</h1>
                                    <p>Sistem informasi untuk monitoring aliran irigasi tarum barat Provinsi Jawa Barat</p>
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
                                    <h1 style="font-size:60px;color:white">Sistem Monitoring Hidrologi untuk Saluran Irigasi Tarum Barat</h1>
                                    <p>Sistem informasi untuk monitoring aliran irigasi tarum barat Provinsi Jawa Barat</p>
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
                                    <h1 style="font-size:60px;color:white">Sistem Monitoring Hidrologi untuk Saluran Irigasi Tarum Barat</h1>
                                    <p>Sistem informasi untuk monitoring aliran irigasi tarum barat Provinsi Jawa Barat</p>
                                    <p><a class="btn btn-lg btn-outline-light" href="#">Lihat Peta</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </header>
        <!--end header -->
        <main class="bg-light">

            <!--start page wrapper (Bagian Isi Utama)-->

            <!-- <div class="page-content"> -->
            @yield('content')
            <!-- </div> -->
        </main>

        <!--end page wrapper -->

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!-- <footer class="page-footer bg-primary"> -->

        <!-- </footer> -->
        <div class="wrapper">
            <nav class="navbar navbar-expand-lg navbar-light card-body "
                style="display: flex;justify-content: flex-start; background:linear-gradient(to right, #000080 50%, #ccffff 100%);">
                <!-- <img src="{{asset('images/pjt2.png')}}" class="card-img-top" alt="..."
                    style="max-width: 10%;height: auto;"> -->
                <iframe
                    src="https://maps.google.com/maps?width=100&amp;height=100&amp;hl=en&amp;q=perusahan umum jasa tirta 2&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                    height="150" width="200" style="border-radius:2.5%;"></iframe>
                <div style="margin-left:20px; font-size:10px;" class="text-light">
                    <b style="font-size:17px;">Perusahaan Umum Jasa Tirta II</b>
                    <br>
                    <p style="font-size:12px;margin-top:10px;">Direktorat Jendral Sumber Daya Air<br>
                        Jl. Lurah Kawi No. 1 Jatiluhur, Kab. Purwakarta, Jawa Barat<br>
                        <i class='bx bxs-phone'></i> Telp: (0264) 201972 <br>
                        <i class='bx bxs-envelope'></i> Email: pjt2@jasatirta2.co.id
                    </p>
                </div>
                <div class="" style="margin-top:0;margin-left: auto;margin-right: 0;display:flex;">
                    <div style="">
                        <div class="text-white mt-2" style="">
                            <u>                                
                                <b style="font-size:17px;">Menu</b>
                            </u> 
                        </div>
                        <a href="{{url('/')}}" class="text-white">Beranda</a><br>
                        <a href="{{url('/map')}}" class="text-white">Peta</a><br>
                        <a href="{{url('/login')}}" class="text-white">admin</a><br>
                        <!-- <a href="javascript:linkterkait()" class="text-white">Link Terkait</a><br> -->
                        <a href="#" class="text-white">Kontak Kami</a>
                    </div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <div>
                        <img src="{{asset('images/pjt2.png')}}" height="auto" width="125"
                            style="border-radius:2.5%;margin:5px;"></img>
                        <!-- <img src="{{asset('images/pjt2.png')}}" class="" alt="..."
                    style="max-width: 10%;height: auto;"> -->
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Additional Css -->
    <!-- <script src="{{asset('CostumStyle/script.js')}}"></script> -->
    <script>
        function linkterkait() {
            Swal.fire({
                // title: 'Link Terkait',
                width: '13rem',
                position: 'top-end',
                input: 'select',
                inputOptions: {
                    pjt: 'PJT II',
                    sihka: 'SIHKA'
                },
                heightAuto: false,
                customClass: 'swal-height',
                inputValidator: (value) => {
                    return new Promise((resolve) => {
                        if (value === 'pjt') {
                            // resolve()
                            // window.location.href = "{{url('www.google.com')}}";
                            // window.location.replace('www.google.com2');
                            window.location.href = 'https://www.jasatirta2.co.id/';
                        } else {
                            // resolve('You need to select oranges :)')
                            window.location.href = 'https://sihka.pusair-pu.go.id/';
                        }
                    })
                }
            })
        }
    </script>

    <!-- Bootstrap JS -->
    <!-- <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="{{asset('CostumStyle/js/bootstrap.bundle.min.js')}}"></script>
    <!--plugins-->
    <script src="{{asset('CostumStyle/js/jquery.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/metismenu/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/datatable/js/dataTables.dateTime.min.js')}}"></script>
    <script src="{{asset('CostumStyle/plugins/datatable/js/moment.min.js')}}"></script>
    <script src="{{asset('CostumStyle/js/table-datatable.js')}}"></script>
    <!--app JS-->
    <script src="{{asset('CostumStyle/js/app.js')}}"></script>

    <script src="{{asset('CostumStyle/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <!-- <script src="{{asset('CostumStyle/plugins/apexcharts-bundle/js/apex-custom.js')}}"></script> -->
    @yield('CustomScripts')
    <!-- <script src="{{asset('CostumStyle/js/index.js')}}"></script> -->

</body>

</html>