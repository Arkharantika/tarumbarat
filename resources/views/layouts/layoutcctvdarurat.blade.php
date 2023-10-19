<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--favicon-->
    <!-- <link rel="icon" href="{{asset('CostumStyle/images/dokter.png')}}" type="image/png" /> -->
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
    <!-- Page Title -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <title>SISIRUMBA</title>

    <style>
        /* Specify the dimensions of the map container */
        .map {
            width: 100%;
            height: 600px;
            position: relative;
        }

        /* Define styles for the sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            background-color: white;
            padding: 10px;
            border-right: 1px solid #ccc;
            height: 100%;
            overflow-y: scroll;
        }
    </style>
</head>

<!-- Bagian Body Semua Berawal Dari Sini -->

<body>
    <!--wrapper-->
    <div class="wrapper">

        @yield('jungul')


        <!--start page wrapper (Bagian Isi Utama)-->

        <!--start header (Bagian Atas (Topbar)) -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item mobile-search-icon">
                                <a class="nav-link" href="#"> <i class='bx bx-search'></i>
                                </a>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                    </a>
                                    <div class="header-notifications-list">
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                    </a>
                                    <div class="header-message-list">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->

        <div class="page-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>


    </div>
    <!--end wrapper-->

    <!-- Additional Css -->
    <!-- <script src="{{asset('CostumStyle/script.js')}}"></script> -->

    <!-- Bootstrap JS -->
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